<?php

    if (isset($_POST['confirm']) AND $_POST['confirm']=="oui")
        {
            include_once('../../../../controller/modules/users/model/User.class.php');
        
            //effectuer la désinscription
            $user = new User;
            $user_id = $user->getIdfromLogininDatabase($_COOKIE['login']);
            $user->RemoveUserfromId($user_id);
        
            //suprimer les cookies
            $cookie_name = 'login';
            unset($_COOKIE[$cookie_name]);
            $res = setcookie($cookie_name, '', time() - 3600);
        
            $cookie_name = 'password';
            unset($_COOKIE[$cookie_name]);
            $res = setcookie($cookie_name, '', time() - 3600);
        
            header('Location: ../../../../controller/index.php');
            
        }
    
    else
        {
            header('Location: ../../../../controller/index.php');
            
        }
?>