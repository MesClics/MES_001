<?php
    class DatabaseConnection{
        private $database;

        function __construct(){
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $db_name ='mesclics';
            //mise en ligne
            // $host = 'sql1.cluster1.easy-hebergement.net';
            // $user = 'treecup3';
            // $password = 'MCdb3211';
            // $db_name ='treecup3';

            try
            {
                $database=new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8', $user, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                $this->setDatabase($database);
            }

            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }
        }

        public function database(){
            return $this->database;
        }

        private function setDatabase($database){
            $this->database = $database;
        }

        public function select($what, $from, $where = null, $orderBy = null, $order = 'ASC', Array $args){
            $req = $this->database->prepare('SELECT ' . $what . ' FROM '. $from .' WHERE '. $where . ' ORDER BY ' . $orderBy . ' ' . $order);
            $req->execute($args);
            $rep = $req->fetchAll();
            $req->closeCursor();
            return $rep;
        }

        public function update($table, $where, Array $args){
            $req = $this->database->prepare('UPDATE ' . $table . ' SET ' . $args . ' WHERE ' . $where);
            $req->execute($args);
            $req->closeCursor();
        }

        public function insert($table, Array $args){
            $cols = array();
            $alias = array();
            foreach($args as $col){
                $cols[] = $col;
                $col = ':'.$col;
                $alias[] = $col;
            }
            $req = $this->database->prepare('INSERT INTO ' . $table . '('. implode(', ', $cols) .') VALUES(' . implode(', ', $alias) . ')');
            $req->execute($args);
            $req->closeCursor();
        }
    }
?>
