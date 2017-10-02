<?php
session_start();

session_destroy();
unset($_COOKIE['login']);
setcookie('login','', time() - 3600);
unset($_COOKIE['password']);
setcookie('password','', time() - 3600);
include('../../../../controller/index.php');
?>
