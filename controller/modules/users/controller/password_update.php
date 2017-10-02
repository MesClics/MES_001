<?php

    if(isset($_POST['new_password']))
    {
        //vérifier que l'ancien mot de passe est exact
        if(sha1(htmlspecialchars($_POST['old_password']))==$_COOKIE['password'])
        {
            if($_POST['new_password']==$_POST['new_password2'])
            {
                include_once('../../../../controller/modules/users/model/User.class.php');
                $user = new User;

                $user->setPasswordfromIdinDatabase($_COOKIE['user_id'], sha1(htmlspecialchars($_POST['new_password'])));
            
                //modifier le cookie
                setcookie('password', sha1(htmlspecialchars($_POST['new_password'])), time() + 365*24*3600, null, null, false, true);
                //envoyer une confirm
                $ok = TRUE;
                
                header('Location: ../../../../controller/index.php');
            }
            
            else
            {
                $error_password=TRUE;      
            }
            
            
        }
        
        else
            {
                $error_old_password=TRUE;
            }
                
        include('../view/password_update.php');        
    }

    else
    {
        include('../view/password_update.php');
    }
?>