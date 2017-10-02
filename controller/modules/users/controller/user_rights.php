<!-- page de gestion des droits -->
<?php
    
    //si l'utilisateur est connecté
    if(isset($_COOKIE['login']))
    {
        $user = new User();
        $user->getCategoryfromIdinDatabase($_COOKIE['user_id']);
        
        //si l'utilisateur est "admin", il a alors l'accès à la gestion des droits des utilisateurs
        if($user->category == "admin")
        {
           include('../view/user_rights.php');
        }
        
    }

    
?>