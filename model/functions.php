<?php
    session_start();
    //Fonction de traitement des formulaires
    function formValid($post){
        if($post){
            //on récupère l'identifiant du formulaire
            $form = htmlspecialchars($post['token']);

            //on passe en revue les types de formulaire et on appelle leur fonction correspondante
            switch ($form) {
                case 'sign-in':
                    $login = htmlspecialchars($post['sign-in_login']);
                    $password = htmlspecialchars($post['sign-in_password']);
                    
                    require_once('MCUser.php');
                    $user = new MCUser($login, $password);

                    //si l'utilisateur est Client
                    if($user->isClient()){
                        $client = $user->isClient();
                        //on effectue le sign-in
                        $user->signIn($client);
                    } else{
                        require_once('MCFlashMessage.php');
                        $flash = new MCFlashMessage('error', 'Vous n\'avez pas encore de compte client chez mesclics.fr', 'sign-in');
                    }


                    
                    break;
                
                default:
                    return;
                    break;
            }
        }
    }
//on active la validation des formulaires
var_dump($_SESSION);
formValid($_POST);
var_dump($_SESSION);

    //Fonction de login


?>