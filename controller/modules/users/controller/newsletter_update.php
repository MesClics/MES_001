<?php

include_once('../../../../controller/modules/users/model/User.class.php');
$user = new User;

    if(isset($_POST['newsletter']))
    {
        $user->setNewsletterfromIdinDatabase($_COOKIE['user_id']);
        $ok = TRUE;
        
        //retourner si l'utilisateur est inscrit à la newsletter pour le message de confirmation
        if($user->getNewsletterfromIdinDatabase($_COOKIE['user_id']))
        {
            $newsletter_on=TRUE;
        }
        
        include('../view/newsletter_update.php');
    }

    else
    { 
        //rechercher si l'utilisateur est déjà inscrit
        if($user->getNewsletterfromIdinDatabase($_COOKIE['user_id']))
        {
            $newsletter_on=TRUE;
        }
        include('../view/newsletter_update.php');
    }
?>