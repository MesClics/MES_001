<?php

class User
{
    public $id;
    public $login;
    public $mail;
    public $password;
    public $category; //user, author, webmaster
    public $sign_up_date;
    public $newsletter;
    public $last_update;
    public $last_visit;
    
//Fonctions sur l'ensemble des données
        
        //Insertion d'un nouvel utilisateur dans la BDD
        public function InsertNewUser($login, $email, $password, $newsletter)
        {
            include('database_connection.php');
            $req=   $database->prepare('INSERT INTO users(login, mail, password, category, sign_up_date, newsletter, last_update) VALUES (:login, :email, :password, :category, NOW(), :newsletter, NOW())');
                    $req->execute(array(
                    'login'=>$login,
                    'email'=>$email,
                    'password'=>$password,
                    'category'=>"user",
                    'newsletter' => $newsletter));
                    $req->closeCursor();

            $this->login=$login;
            $this->email=$email;
            $this->password=$password;
            $this->sign_up_date=date('d/M/Y');
            $this->newsletter=$newsletter;
            $this->last_update=date('d/M/Y');
            $this->last_visit=date('d/M/Y');

            //récupérer les paramètres automatiques (id,category)
            $req=   $database->prepare('SELECT id, category FROM users WHERE mail=:email');
                    $req->execute(array(
                    'email'=>$email));
                    $rep=$req->fetch();
                    $req->closeCursor();
            
            $this->id=$rep['id'];
            $this->category=$rep['category'];

        }
        
        
// fonctions sur l'id
        //getters
        public function getId()
        {
            return $this->id;
        }
    
        public function CollectAllfromIdinDatabase($id)
        {
            include('database_connection.php');
            $req =  $database->prepare('SELECT *, DATE_FORMAT(sign_up_date,\'%d/%m/%Y\') AS date, DATE_FORMAT(last_update, \'%d/%m/%Y\') AS last_update, DATE_FORMAT(last_visit, \'%d/%m/%Y\') AS last_visit FROM users WHERE id=:id');
                    $req->execute(array(
                    'id'=>$id));
                    $rep=$req->fetch();
                    $req->closeCursor();
            
            $this->id=$id;
            $this->login=$rep['login'];
            $this->password=$rep['password'];
            $this->email=$rep['mail'];
            $this->category=$rep['category'];
            $this->newsletter=$rep['newsletter'];
            $this->sign_up_date=$rep['date'];
            $this->last_update=$rep['last_update'];
            $this->last_visit=$rep['last_visit'];

        }
    
        public function getIdfromLogininDatabase($login)
        {
            include('database_connection.php');
            $req=  $database->prepare('SELECT id from users WHERE login=:login');
                        $req->execute(array(
                        'login'=>$login));
                        $rep = $req->fetch();
                        $req->closeCursor();
            
            $this->id=$rep['id'];
            return $this->id;
        }
        
        //setters
        public function setId($new_id)
        {
            $this->id=$new_id;
        }
        
        public function RemoveUserfromId($id)
        {
            
            include('database_connection.php');
            $req=   $database->prepare('DELETE FROM users WHERE id=:id');
                    $req->execute(array(
                    'id'=>$id));
                    $req->closeCursor();
        }
        
    
// fonctions sur le login
        //getters
        public function getLogin()
        {
            return $this->login;
        }
    
        public function CollectAllfromLogininDatabase($login)
        {
            include('database_connection.php');
           $req =  $database->prepare('SELECT *, DATE_FORMAT(sign_up_date,\'%d/%m/%Y\') AS date, DATE_FORMAT(last_update, \'%d/%m/%Y\') AS last_update, DATE_FORMAT(last_visit, \'%d/%m/%Y\') AS last_visit FROM users WHERE login=:login');
                    $req->execute(array(
                    'login'=>$login));
                    $rep=$req->fetch();
                    $req->closeCursor();
            
            $this->id=$rep['id'];
            $this->login=$login;
            $this->password=$rep['password'];
            $this->email=$rep['mail'];
            $this->category=$rep['category'];
            $this->newsletter=$rep['newsletter'];
            $this->sign_up_date=$rep['last_update'];
            $this->last_visit=$rep['last_visit'];

        }
    
        public function getLoginfromIdinDatabase($id)
        {
            include('database_connection.php');
            $req=  $database->prepare('SELECT login from users WHERE id=:id');
                        $req->execute(array(
                        'id'=>$id));
                        $rep = $req->fetch();
                        $req->closeCursor();
            
            $this->login=$rep['login'];
            return $this->login;
        }
        
        //setters
        public function setLogin($new_login)
        {
            $this->login=$new_login;
        }
    
        public function setLoginfromIdinDatabase($id, $new_login)
        {
            include('database_connection.php');
            $req=  $database->prepare('UPDATE users SET login = :new_login, last_update = NOW() WHERE id = :id');
                        $req->execute(array(
                        'new_login'=>$new_login,
                        'id'=>$id));
                        $req->closeCursor();
            
            $this->login=$new_login;
        }
    
    
// fonctions sur le mail
        //getters
        public function getEmail()
        {
            return $this->email;
        }

        public function CollectAllfromEmailinDatabase($email)
        {
        include('database_connection.php');
        $req =  $database->prepare('SELECT *, DATE_FORMAT(sign_up_date,\'%d/%m/%Y\') AS date, DATE_FORMAT(last_update, \'%d/%m/%Y\') AS last_update, DATE_FORMAT(last_visit, \'%d/%m/%Y\') AS last_visit FROM users WHERE mail=:email');
                $req->execute(array(
                'email'=>$email));
                $rep=$req->fetch();
                $req->closeCursor();
            
        $this->id=$rep['id'];
        $this->login=$rep['login'];
        $this->password=$rep['password'];
        $this->email=$email;
        $this->category=$rep['category'];
        $this->newsletter=$rep['newsletter'];
        $this->sign_up_date=$rep['date'];
        $this->last_update=$rep['last_update'];
        $this->last_visit=$rep['last_visit'];

        }
        
        //setters
        public function setEmailfromIdinDatabase($id, $new_email)
        {
            include('database_connection.php');
            $req=  $database->prepare('UPDATE users SET mail = :new_email, last_update = NOW() WHERE id = :id');
                        $req->execute(array(
                        'new_email'=>$new_email,
                        'id'=>$id));
                        $req->closeCursor();
            
            $this->email=$new_email;
        }       
    
// fonctions sur le mot de passe
        //getters
        public function getPassword()
        {
            return $this->password;
        }
    
          public function getPasswordfromLogininDatabase($login)
        {
            include('database_connection.php');
            $req=  $database->prepare('SELECT password from users WHERE login=:login');
                        $req->execute(array(
                        'login'=>$login));
                        $rep = $req->fetch();
                        $req->closeCursor();
            
            $this->password=$rep['password'];
            return $this->password;
        }
    
        //setters
        public function setPasswordfromIdinDatabase($id, $new_password)
        {
            include('database_connection.php');
            $req=  $database->prepare('UPDATE users SET password = :new_password, last_update = NOW() WHERE id = :id');
                        $req->execute(array(
                        'new_password'=>$new_password,
                        'id'=>$id));
                        $req->closeCursor();
            
            $this->password=$new_password;
        }
    
// fonctions sur la catégorie
        //getters
        public function getCategory()
        {
            return $this->category;
        }
    
        public function getCategoryfromIdinDatabase($id)
        {
            include('database_connection.php');
            $req = $database->prepare('SELECT category FROM users WHERE id = :id');
                $req->execute(array(
                'id'=>$id));
                $rep=$req->fetch();
                $req->closeCursor();
                    
                $this->category=$rep['category'];
                return $this->category;
        }
    
        //setters
        public function setCategoryfromIdinDatabase($id, $new_category)
        {
            include('database_connection.php');
            $req=  $database->prepare('UPDATE users SET category = :new_category, last_update = NOW() WHERE id = :id');
                        $req->execute(array(
                        'new_category'=>$new_category,
                        'id'=>$id));
                        $req->closeCursor();
            
            $this->category=$new_category;
        }
    
// fonctions sur la date d'inscription
        //getters
        public function getSignUpDate()
        {
            return $this->sign_up_date;
        }
    
    //setters
        public function setDatefromIdinDatabase($id, $new_date)
            {
                include('database_connection.php');
                $req=  $database->prepare('UPDATE users SET sign_up_date = :new_date, last_update = NOW() WHERE id = :id');
                            $req->execute(array(
                            'new_date'=>$new_date,
                            'id'=>$id));
                            $req->closeCursor();

                $this->sign_up_date=$new_date;
            }
    
    
// fonctions sur l'inscription à la newsletter
        //getters
        public function getNewsletter()
        {
            return $this->newsletter;
        }
    
        public function getNewsletterfromIdinDatabase($id)
        {
            include('database_connection.php');
            $req=  $database->prepare('SELECT newsletter from users WHERE id=:id');
                        $req->execute(array(
                        'id'=>$id));
                        $rep = $req->fetch();
                        $req->closeCursor();
            
            $this->newsletter=$rep['newsletter'];
            return $this->newsletter;           
        }
    
        //setters    
        public function setNewsletterfromIdinDatabase($id)
        {
            include('database_connection.php');
            $req= $database->prepare('UPDATE users SET newsletter=1-newsletter, last_update = NOW() WHERE id=:id');
                    $req->execute(array(
                    'id'=>$id));
                    $req->closeCursor();
        }

// fonctions sur la date de la dernière modification
        //getters
        public function getLastupdate()
        {
            return $this->last_update;
        }
    
        public function getLastupdatefromIdinDatabase($id)
        {
            include('database_connection.php');
            $req = $database->prepare('SELECT last_update FROM users WHERE id=:id');
                    $req->execute(array(
                    'id'=>$id));
                    $rep = $req->fetch();
                    $req->closeCursor();
            
            $this->last_update=$rep['last_update'];
            return $this->last_update;
        }
        
    
        //setters
        public function setLastupdatefromIdinDatabase($id)
        {
            include('database_connection.php');
            $req = $database->prepare('UPDATE users SET last_update = NOW() WHERE id=:id');
                    $req->execute(array(
                    'id'=>$id));
                    $req->closeCursor();
        }
    
// fonctions sur la date de la dernière visite
    
//getters
        public function getLastvisit()
        {
            return $this->last_visit;
        }
    
        public function getLastvisitfromIdinDatabase($id)
        {
            include('database_connection.php');
            $req = $database->prepare('SELECT last_visit FROM users WHERE id=:id');
                    $req->execute(array(
                    'id'=>$id));
                    $rep = $req->fetch();
                    $req->closeCursor();
            
            $this->last_visit=$rep['last_visit'];
            return $this->last_visit;
        }
        
       
    
        //setters
        public function setLastvisitfromIdinDatabase($id)
        {
            include('database_connection.php');
            $req = $database->prepare('UPDATE users SET last_visit = NOW() WHERE id=:id');
                    $req->execute(array(
                    'id'=>$id));
                    $req->closeCursor();
        }
}