<?php

    if(isset($_POST['login']) OR isset($_POST['id']) OR isset($_POST['email']))
        {
        include_once('../../../../controller/modules/users/model/User.class.php');
        $user = new User();
        
            //traitement du formulaire et affichage des résultats
            if(isset($_POST['login']) AND !empty($_POST['login']))
                {
                   $user->CollectAllfromLogininDatabase(htmlspecialchars($_POST['login']));

                            $key['id'] = $user->id;
                            $key['login'] = $user->login;
                            $key['mail'] = $user->email;
                            $key['password'] = $user->password;
                            $key['sign_up_date'] = $user->sign_up_date;
                            $key['category'] = $user->category;
                            $key['newsletter'] = $user->newsletter;
                            $key['last_update'] = $user->last_update;
                            $key['last_visit'] = $user->last_visit;
                }
        
        if(isset($_POST['email']) AND !empty($_POST['email']))
            {
                $user->CollectAllfromEmailinDatabase(htmlspecialchars($_POST['email']));
                    
                        $key['id'] = $user->id;
                        $key['login'] = $user->login;
                        $key['mail'] = $user->email;
                        $key['password'] = $user->password;
                        $key['sign_up_date'] = $user->sign_up_date;
                        $key['category'] = $user->category;
                        $key['newsletter'] = $user->newsletter;
                        $key['last_update'] = $user->last_update;
                        $key['last_visit'] = $user->last_visit;
            }
        
        if(isset($_POST['id']) AND !empty($_POST['id']))
            {
                $user->CollectAllfromIdinDatabase(htmlspecialchars($_POST['id']));
                    
        
                        $key['id'] = $user->id;
                        $key['login'] = $user->login;
                        $key['mail'] = $user->email;
                        $key['password'] = $user->password;
                        $key['sign_up_date'] = $user->sign_up_date;
                        $key['category'] = $user->category;
                        $key['newsletter'] = $user->newsletter;
                        $key['last_update'] = $user->last_update;
                        $key['last_visit'] = $user->last_visit;
            }
        }
?>