<?php

if(isset($_COOKIE['login']))
    {
        include('../../../../controller/index.php');
        include('../view/account.php');
    }

else
    {
        header('Location : ../../../../controller/index.php');
    }
?>
