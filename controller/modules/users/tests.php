<?php

include_once ('User.class.php');


$user= new User();
/*$user->InsertNewUser('Bertrand','bertrand@pierre.com ','bertrandpwd');
echo $user->getLogin();
echo $user->getId();

$user= new User();
$user->getIdfromLogininDatabase('Bertrand');
$user->setLoginfromIdinDatabase($user->getId(),'Polo');
echo $user->getLogin();*/

$user->CollectAllfromIdinDatabase(21);
echo $user->getLogin() . ' s\'est inscrit(e) le ' . $user->getSignUpDate();
?>

    
    