<?php
    require_once ('MCMessage.php');

    class MCUser{
        private $login;
        private $password;
        private $email;
        
        public function __construct($login, $password = null, $email = null){
            $this->setLogin($login);
            if($password){
                $this->setPassword($password);
            }
            if($email){
                $this->setEmail($email);
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

        private function setLogin($login){
            $this->login = $login;
        }

        private function setEmail($email){
            $this->email = $email;
        }

        private function setPassword($password){
            $this->password = $password;
        }

        public function signIn(MCClient $client){
            $cryptedPass = sha1($this->password().$client->ref());
            if($cryptedPass === $client->password()){
                $_SESSION['user']['login'] = $user->login();
                $_SESSION['user']['password'] = true;
                $_SESSION['user']['email'] = $user->email();
            } else{
                new MCFlashMessage('Error', 'L\'identifiant et/ou le mot de passe ne sont pas corrects');
            }
        }

        public function isLogged(){
            if($_SESSION['user']['login'] && $_SESSION['user']['password']){
                return true;
            }
        }

        public function isClient(MCUser $user){
            require_once('database.php');
            $db = new DatabaseConnection();

            require_once('MCClientManager.php');
            $clientManager = new MCClientManager($db);
            $isClient = $clientManager->exists($user->login());

            return $isClient;
        }
    }
?>