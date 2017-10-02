<?php
    class MCClient{
        private $id;
        private $name;
        private $folderName;
        private $ref;
        private $lastConnection;
        private $login;
        private $password;
        private $email;
        

        public function __construct($ref, $id, $name, $login = null, $password = null, $email = null, $last_connection = null, $folder_name = null){
            $this->setRef($ref);
            $this->setId($id);
            $this->setName($name);
            $this->setLogin($login);
            $this->setPassword($password);
            $this->setEmail($email);
            $this->setLastConnection($last_connection);
            $this->setFolderName($folder_name);
        }

        public function ref(){
            return $this->ref;
        }

        public function id(){
            return $this->id;
        }

        public function name(){
            return $this->name;
        }
        
        public function login(){
            return $this->login;
        }

        public function password(){
            return $this->password;
        }

        public function email(){
            return $this->email;
        }

        public function  lastConnection(){
            return $this->lastConnection;
        }

        public function folderName(){
            return $this->folderName;
        }

        protected function setRef($ref){
            $this->ref = $ref;
        }

        protected function setId($id){
            $this->id = $id;
        } 

        protected function setName($name){
            $this->name = $name;
        }
       
        protected function setLogin($login){
            $this->login = $login;
        }  

        protected function setPassword($password ){
            $this->password = $password;
        }

        protected function setEmail($email){
            $this->email = $email;
        }

        protected function setLastConnection($lastConnection){
            $this->lastConnection = new DateTime($lastConnection);
        }

        protected function setFolderName($folder_name){
            $this->folderName = $folder_name;
        }
    }
?>