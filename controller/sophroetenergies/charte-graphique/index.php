<?php
    require_once('./model/database.php');
    require_once('./model/MCClient.php');
    require_once('./model/MCClientManager.php');
   
    //CONFIG
    //nom des dossiers concernant ce client dans l'arborescence
    $folder_name = "sophroetenergies";

    // VARIABLES
    $db = new DatabaseConnection();
    $clientManager = new MCClientManager($db);
    $client = $clientManager->get('SOP_001');

    $vars = array();
        //VARIABLES ESPACE CLIENT
        $vars['client'] = $client;
        
        //PAGE CONFIG
        $vars['page']['title'] = "Charte Graphique | mesclics.fr";
        $vars['page']['description'] = "Charte Graphique | mesclics.fr";
        //les fichiers css (attention à l'ordre)
        $vars['page']['styles'] = array(
            array(
                'folder' => null,
                'file'=> 'espace-client.css',
                'media'=> 'all'
            ),
            array(
                'folder' => null,
                'file'=> 'espace-client-charte.css',
                'media'=> 'all'
            ),
            array(
                'folder' => null,
                'file'=> 'espace-client-charte-print.css',
                'media'=> 'print'
            ),
            array(
                'folder'=> 'clients/'.$folder_name,
                'file'=> $folder_name.'.css',
                'media'=> 'all'
            )
        );
        $vars['page']['images-folder'] = "/./view/clients/".$folder_name."/images/";
        $vars['page']['documents-folder'] = "/./view/clients/".$folder_name."/documents/";

    //TEMPLATES
    $templates = array(
        "espace-client/doctype.php",
        "espace-client/charte-graphique/main.php",
        "espace-client/charte-graphique/".$folder_name.'.php'
    );

    foreach($templates AS $template){
        include './view/templates/'.$template;
    }
?>