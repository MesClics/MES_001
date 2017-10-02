<?php
//si pas de cookie
    if(!isset($_COOKIE['login']) AND !isset($_COOKIE['password']))
        {
            // si quelque chose est envoyé par le formulaire
            if(isset($_POST['login']) OR isset($_POST['email']) OR isset($_POST['password1']) OR isset($_POST['password2']))
                {
                    include_once('../../../../controller/modules/users/model/User.class.php');

                    //vérifier que tous les champs soient remplis

                    if(!empty($_POST['login']) AND !empty($_POST['email']) AND !empty($_POST['password1']) AND !empty($_POST['password2']))
                        {
                            $form_login = $_POST['login'];
                            $form_email = $_POST['email'];
                            $form_pass1 = sha1(htmlspecialchars($_POST['password1']));
                            $form_pass2 = sha1(htmlspecialchars($_POST['password2']));
                            if(isset($_POST['newsletter']))
                                {
                                    $form_newsletter=TRUE;
                                }
                            else
                                {
                                    $form_newsletter=FALSE;  
                                }

                            //verifier que le login soit disponible

                            $user= new User();
                                if($user->getIdfromLogininDatabase($form_login))
                                {
                                     $login_error=TRUE;
                                }

                            else
                                {
                                    //verifier que l'email soit conforme
                                    if((filter_var($form_email, FILTER_VALIDATE_EMAIL))==FALSE)
                                        {
                                            $email_error = TRUE;
                                        }
                                    
                                    else
                                        {
                                            //vérifier que les mots de passes sont identiques
                                            if ($form_pass1!=$form_pass2)
                                                {
                                                    $password_error = TRUE;
                                                }

                                            else
                                                {
                                                     $user->InsertNewUser($form_login, $form_email, $form_pass1, $form_newsletter);//envoyer au modèle pour créer le nouvel utilisateur
                                                     $user_id = $user->getIdfromLogininDatabase($form_login);
                                                
                                                    //AJOUTER LA CONNEXION AUTOMATIQUE PAR LA CREATION DES COOKIES
                                                    setcookie('login', $form_login, time() + 365*24*3600, null, null, false, true);
                                                    setcookie('password', $form_pass1, time() + 365*24*3600, null, null, false, true);
                                                    setcookie('user_id', $user_id, time() + 365*24*3600, null, null, false, true);
                                                
                                                    //on modifie la date de la dernière visite
                                                    $user->setLastvisitfromIdinDatabase($user_id);
                                                
                                                    if(!isset($_POST['from']))
                                                        {
                                                            header('Location: ../../../../controller/index.php');
                                                        }
                                                
                                                    else
                                                        {
                                                            header('Location: ../controller/users_panel.php');
                                                        }
                                                }
                                        }

                                    
                                }

                    }
                
                    else
                        {
                            $error = TRUE;
                        }
                
                }
            include_once('../view/sign_up.php');
        }

//si cookies
    else
        {
            session_start();
            include_once('../view/sign_up.php');
        }

