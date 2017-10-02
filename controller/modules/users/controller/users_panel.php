<?php
//si un ajout d'utilisateur est en cours
if(isset($_POST['current']) AND ($_POST['current']=="user_add"))
{
    $user_add = TRUE;
    include('../controller/user_add.php');
}


//si une modif ou une recherche sont en cours 

if(isset($_POST['current_update']) AND $_POST['current_update']=="user_update")
    {
        $user_update = TRUE;
        include('../controller/user_update.php');      
    }

if(isset($_POST['current_out']))
    {
        $user_sign_out = TRUE;
        include('../controller/user_update.php');
    }

if(isset($_POST['current']))
    {
        if($_POST['current']=="user_search_one")
        {
            include('../controller/user_search.php');
            $user_search_one = TRUE;
        }

        if($_POST['current']=="user_search_all")
        {
            include('../controller/user_search_all.php');
            $user_search_all = TRUE;
        }
    }
    
    include('../view/users_panel.php');
?>