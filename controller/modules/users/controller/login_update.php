<?php

    if(isset($_POST['new_login']))
    {
        //vérifier la dispo du pseudo
        include_once('../../../../controller/modules/users/model/User.class.php');
        $user = new User;
        
        if($user->getIdfromLogininDatabase($_POST['new_login']))
        {
            $login_error = TRUE;
            
        }
        
        else
        {
            $user->setLoginfromIdinDatabase($_COOKIE['user_id'], htmlspecialchars($_POST['new_login']));
            
            //changer le cookie
            setcookie('login', htmlspecialchars($_POST['new_login']), time() + 365*24*3600, null, null, false, true);
            
            //envoyer une confirm
            $ok = TRUE;
            header('Location:../../../../controller/index.php');
        }
        
        include('../view/login_update.php');
    }

    else
    {
        include('../view/login_update.php');
    }
?>