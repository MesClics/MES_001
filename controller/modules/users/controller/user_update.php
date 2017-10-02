<?php

include_once('../../../../controller/modules/users/model/User.class.php');
$user = new User();

    // modification du compte utilisateur
    if(isset($user_update))
        {
            
        
            if(isset($_POST['new_login']) AND !empty($_POST['new_login']))
                {
                    $user -> setLoginfromIdinDatabase($_POST['id'], htmlspecialchars($_POST['new_login']));
                    $user-> setLastupdatefromIdinDatabase($_POST['id']);
                }
            
            if(isset($_POST['new_password']) AND !empty($_POST['new_password']))
                {
                    $user -> setPasswordfromIdinDatabase($_POST['id'], sha1(htmlspecialchars($_POST['new_password'])));
                    $user-> setLastupdatefromIdinDatabase($_POST['id']);
                }
        
            if(isset($_POST['new_email']) AND !empty($_POST['new_email']))
                {
                    $user -> setEmailfromIdinDatabase($_POST['id'], htmlspecialchars($_POST['new_email']));
                    $user-> setLastupdatefromIdinDatabase($_POST['id']);
                }
            /*if(isset($_POST['new_date']) AND !empty($_POST['new_date']))
                {
                    $user -> setDatefromIdinDatabase($_POST['id'], htmlspecialchars('new_date'));
                    $user-> setLastupdatefromIdinDatabase($_POST['id']);
                }*/
            if(isset($_POST['new_category']) AND !empty($_POST['new_category']))
                {
                    $user -> setCategoryfromIdinDatabase($_POST['id'], htmlspecialchars($_POST['new_category']));
                    $user-> setLastupdatefromIdinDatabase($_POST['id']);
                }
                                                         
            if(isset($_POST['new_newsletter']) AND !empty($_POST['new_newsletter']))
                {
                    $user -> setNewsletterfromIdinDatabase($_POST['id']);
                    $user-> setLastupdatefromIdinDatabase($_POST['id']);
                }
        
        
    // suppression du compte utilisateur
    if(isset($user_sign_out))
    {
        $user->RemoveUserfromId($_POST['current_out']);
    }
                                                         
        }
?>
