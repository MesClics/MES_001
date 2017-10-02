<?php
    require_once ('MCFlashMessage.php');

    class MCUser{
        private $login;
        private $password;
        private $email;
        private $name;
        
        public function __construct($login, $password = null, $email = null, $name = null){
            $this->setLogin($login);
            if($password){
                $this->setPassword($password);
            }
            if($email){
                $this->setEmail($email);
            }
            if($name){
                $this->setName($name);
            }
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

        public function name(){
            return $this->name;
        }

        private function setLogin($login){
            $this->login = $login;
        }

        private function setEmail($email){
            $this->email = $email;
        }

        private function setPassword($password){
            $this->password = $password;
        }

        private function setName($name){
            $this->name = $name;
        }

        public function signIn(MCClient $client){
            $cryptedPass = sha1($this->password().$client->ref());
            if($cryptedPass === $client->password()){
                $_SESSION['user']['login'] = $this->login();
                $_SESSION['user']['password'] = true;
                $_SESSION['user']['email'] = $client->email();
                $_SESSION['user']['name'] = $client->name();
            } else{
                new MCFlashMessage('Error', 'L\'identifiant et/ou le mot de passe ne sont pas corrects', 'sign-in');
            }
        }

        public function isLogged(){
            if($_SESSION['user']['login'] && $_SESSION['user']['password']){
                return true;
            }
        }

        public function isClient(){
            require_once('database.php');
            $db = new DatabaseConnection();

            require_once('MCClientManager.php');
            $clientManager = new MCClientManager($db);
            $isClient = $clientManager->exists($this->login());

            return $isClient;
        }
    }
?>