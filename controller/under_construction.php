<?php
//PATHS
$folder_name = "under_construction";

// VARIABLES
   $vars = array();
   //PAGE CONFIG
   $vars['page']['title'] = "Site en construction";
   $vars['page']['description'] = "mesclics.fr - conception et réalisation web, graphisme et identité visuelle.";
   $vars['page']['styles'] = array(
       array(
           'folder'=> null,
           'file'=> 'under_construction.css',
           'media'=> 'all'
        )
   );
   //FORMS
   $vars['forms']['sign-in'] = "./view/templates/forms/sign-in.php";
   $vars['forms']['sign-out'] = "./view/templates/forms/sign-out.php";

//TEMPLATES
   $templates = array(
       "doctype.php",
       $folder_name.'/main.php',
   );

   foreach($templates AS $template){
       include './view/templates/'.$template;
   }

?>