<?php

$user = new User();
$user->getCategoryfromIdinDatabase($_COOKIE['user_id']);

//pour donner l'accès à tous les utilisateurs sauf à ceux qui appartiennet à la catégorie "user"
if($user->category != "user")
{
    //si l'utilisateur est administrateur ou auteur, on affiche un lien vers la console de gestion
   include('../view/admin_access.php');
}
?>