<?php
    if(!$_SESSION['user']['password']){
        header('Location: ' . $home_url);
    }
    require_once('./model/database.php');
    require_once('./model/MCClient.php');
    require_once('./model/MCClientManager.php');
   
    //CONFIG
    //ref client
    $ref = 'SOP_001';
    //nom des dossiers concernant ce client dans l'arborescence
    $folder_name = 'sophroetenergies';

    if($folder_name !== $_SESSION['user']['folder']){
        header('Location: ' . $home_url);
    }

    // VARIABLES
    $db = new DatabaseConnection();
    $clientManager = new MCClientManager($db);
    $client = $clientManager->get($ref);

    // VARIABLES
    $vars = array();
        //VARIABLES ESPACE CLIENT
        $vars['client'] = $client;
        
        //PAGE CONFIG
        $vars['page']['title'] = "Espace Client | mesclics.fr";
        $vars['page']['description'] = "Espace Client | mesclics.fr";
        $vars['page']['styles'] = array(
            array(
                'folder' => null,
                'file'=> 'espace-client.css',
                'media'=> 'all'
            ),
            array(
                'folder'=> 'clients',
                'file'=> $folder_name . '.css',
                'media'=> 'all'
            )
        );

    //TEMPLATES
    $templates = array(
        "espace-client/doctype.php",
        "espace-client/main.php"
    );

    foreach($templates AS $template){
        include './view/templates/'.$template;
    }
?>