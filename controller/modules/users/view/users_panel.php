<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Gestion des utilisateurs</title>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" type="text/css" href="../view/style.css" media="screen"/>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,200,300italic,200italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
    </head>
        
    <body>
        <nav class="menu">
        <h2>Administration des utilisateurs</h2>
        <ul>
            <li>Gérer les utilisateurs</li>
                <?php include('../controller/users_admin.php');?>
            <li>Gérer les droits d'accès</li>
                <?php include('../controller/user_rights.php');?>
            <li>Envoyer un mail aux utilisateurs</li>
                <?php include('../controller/users_mailing.php');?>
        </ul>
        </nav>

    </body>
</html>




