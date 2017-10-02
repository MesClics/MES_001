<?php
    
    require_once('./model/database.php');
    require_once('./model/MCClient.php');
    require_once('./model/MCClientManager.php');
   
    //CONFIG
    //nom des dossiers concernant ce client dans l'arborescence
    $folder_name = "mesclics";

    // VARIABLES
    $db = new DatabaseConnection();
    $clientManager = new MCClientManager($db);
    $client = $clientManager->get('MES_001');

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
                'file'=> 'mesclics.css',
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