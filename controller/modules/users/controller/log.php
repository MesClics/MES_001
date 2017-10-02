<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title></title>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
    </head>
        
    <body>
        
        <?php

        include_once('../../../../controller/modules/users/model/User.class.php');
        $user = new User;
        
        //si l'utilisateur est online
        if (isset($_COOKIE['login']))
            {
                $user_password = $user->getPasswordfromLogininDatabase($_COOKIE['login']);
            
                //on vérifie si le login et le mot de passe matchent
                if ($user_password==$_COOKIE['password'])
                    {                    
                        //on affiche le menu de déconnexion et de désinscription
                        $user->setLogin($_COOKIE['login']);
                        $user->setId($user->getIdfromLogininDatabase($_COOKIE['login']));
                        include('../view/sign_out.php'); 
                    }

                else
                    {
                        //on affiche le menu de connexion et d'inscription
                        include('../view/sign_in.php');
                    }

            }

        //sinon
        else
            {
                //on affiche le menu de connexion et d'inscription
                include('../view/sign_in.php');
            }

        ?>
               
    </body>
</html>