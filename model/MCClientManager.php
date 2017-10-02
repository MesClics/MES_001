<?php
    require_once('MCClient.php');
    class MCClientManager{
        private $db;

        public function __construct($db){
            $this->setDb($db);
        }

        public function get($ref){
            $args = array(
                'ref' => $ref
            );

            $client = $this->db->select('*', 'mc_clients', 'ref = :ref', 'id', 'ASC', $args);
            
            return new MCClient(
                $ref,
                $client[0]['id'],
                $client[0]['name'],
                $client[0]['login'],
                $client[0]['password'],
                $client[0]['email'],
                $client[0]['last_connection'],
                $client[0]['folder_name']
            );
        }

        public function getFromLogin($login){
            $args = array(
                'login' => $login
            );

            $client = $this->db->select('*', 'mc_clients', 'login = :login', 'id', 'ASC', $args);
            if($client){
                return new MCClient(
                    $client[0]['ref'],
                    $client[0]['id'],
                    $client[0]['name'],
                    $client[0]['login'],
                    $client[0]['password'],
                    $client[0]['email'],
                    $client[0]['last_connection'],
                    $client[0]['folder_name']
                );
            } else{
                return null;
            }
        }

        public function update(Client $client){
            //requête de modif du client
        }

        public function add(Client $client){
            //requête d'ajout de client
            $args = array(
                'ref' => $client->ref(),
                'name' => $client->name(),
                'login' => $client->login(),
                'password' => sha1($client->password().$client->ref()),
                'email' => $client->email(),
                'last_connection' => $client->lastConnection()
            );

            $this->db->insert('mc_clients', $args);
        }

        public function getList(Array $args = null){
            //requête retournant tous les clients
        }

        public function setDb(DatabaseConnection $db){
            $this->db = $db;
        }

        public function exists($login){
           return $this->getFromLogin($login);
        }
    }