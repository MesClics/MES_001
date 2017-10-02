<?php
    
    $user = new User();
    $user->getCategoryfromIdinDatabase($_COOKIE['user_id']);

    //pour donner l'accès à tous les utilisateurs sauf à ceux qui appartiennent à la catégorie "user"
    if($user->category == "admin")
    {
        //si l'utilisateur est administrateur, on affiche un lien vers la partie administration des utilisateurs
        include('../view/users_panel_access.php');
    }


?>