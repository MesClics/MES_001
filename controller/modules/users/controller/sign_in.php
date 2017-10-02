<?php
    session_start();
    
    if (isset($_POST['login']) AND isset($_POST['password']))
        {
            $form_login = htmlspecialchars($_POST['login']);
            $form_password = sha1(htmlspecialchars($_POST['password']));
        
            include_once('../../../../controller/modules/users/model/User.class.php');
            $user= new User();
            $user_pass = $user->getPasswordfromLogininDatabase($form_login);
            $user_id = $user->getIdfromLogininDatabase($form_login);
            if($user_pass == $form_password)
                {
                        setcookie('login', $form_login, time() + 365*24*3600, null, null, false, true);
                        setcookie('password', $form_password, time() + 365*24*3600, null, null, false, true);
                        setcookie('user_id', $user_id, time() + 365*24*3600, null, null, false, true);
                        header('Location: ../../../../controller/index.php');
                
                        //on modifie la date de la dernière visite
                        $user->setLastvisitfromIdinDatabase($user_id);
                }
            else
                {
                    $error_signin=TRUE;
                       include_once('../controller/log.php');
                }
            
        }

    else
    {
        if (!isset($_POST['login']))
            {
                $error_login=TRUE;
            }
        
        else
            {
                $error_password=TRUE;
            }
        
        include_once('../controller/log.php');
    }

?>