<?php

    if(isset($_POST['new_email']))
    {
        
        include_once('../../../../controller/modules/users/model/User.class.php');
        $user = new User;
        
        //verifier que l'email soit conforme
        if((filter_var($_POST['new_email'], FILTER_VALIDATE_EMAIL))==FALSE)
            {
                $email_error = TRUE;
            }
        
        else
            {
                 $user->setEmailfromIdinDatabase($_COOKIE['user_id'], htmlspecialchars($_POST['new_email']));

                //envoyer une confirm
                $ok = TRUE;
                header('Location : ../../../../controller/index.php');
            }
       
                
        include('../view/email_update.php');
    }

    else
    {
        include('../view/email_update.php');
    }
?>