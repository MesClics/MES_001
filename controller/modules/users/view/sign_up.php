
        <?php
        if(isset($_COOKIE['login']))
            {
                echo '<p>Bonjour ' . $_COOKIE['login'] . '</p>';
                include('../controller/log.php');
            }
        
        else
            {
                ?>
                    
                    <form class="sign_in" action="../controller/sign_up.php" method="post">
                        <?php
                        if (isset($error))
                                {
                                    echo '<p>Tous les champs sont obligatoires, veuillez recommencer</p>';
                                }
                        if (isset($login_error))
                                {
                                    echo '<p>Un utilisateur est déjà enregistré avec ce login, merci d\'en choisir un autre</p>';
                                }
                        ?>
                        <label for="login">Choisissez un pseudo</label>
                            <input type="text" name="login" placeholder=""/>

                        <?php
                        if (isset($email_error))
                                {
                                    echo '<p>L\'email saisi n\'est pas conforme. Veuillez réessayer.</p>';
                                }
                        ?>
                        <label for="email">Saisissez une adresse email</label>
                            <input type="text" name="email" placeholder=""/>

                        <?php
                        if (isset($password_error))
                                {
                                    echo '<p>Les deux mots de passe saisis ne sont pas identiques. Veuillez recommencer.</p>';
                                }
                        ?>
                        <label for="password1">Choisissez un mot de passe</label>
                            <input type="password" name="password1" placeholder=""/>

                        <label for="password">Ressaisissez le mot de passe</label>
                            <input type="password" name="password2" placeholder=""/>

                        <label for="newsletter">Souhaitez-vous recevoir notre newsletter ?</label>
                            <input type="checkbox" name="newsletter" checked="checked"/>

                        <input type="submit" value="s'inscrire"/>
                    </form>

                        <?php } ?>



            