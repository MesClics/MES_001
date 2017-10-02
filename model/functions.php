<?php
    //Fonction de traitement des formulaires
    function formValid($_POST){
        if($_POST){
            //on récupère l'identifiant du formulaire
            $form = htmlspecialchars($_POST['submit']);

            //on passe en revue les types de formulaire et on appelle leur fonction correspondante
            switch ($form) {
                case 'sign-in':
                    $login = htmlspecialchars($_POST['login']);
                    $password = htmlspecialchars($_POST['password'];)
                    
                    require_once('MCUser.php');
                    $user = new MCUser($login, $password);

                    //si l'utilisateur est Client
                    if($user->isClient()){
                        $client = $user->isClient();
                        //on effectue le sign-in
                        $user->signIn($client);
                    } else{
                        require_once('MCFlashMessage');
                        $flash = new MCFlashMessage('error', 'Vous n\'avez pas encore de compte client chez mesclics.fr');
                    }


                    
                    break;
                
                default:
                    return;
                    break;
            }
        }
    }

    //Fonction de login


?>