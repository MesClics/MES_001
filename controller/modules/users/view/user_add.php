<h3>Ajouter un utilisateur</h3>
<?php
    if(isset($user_add))
        {
            echo '<p>L\'utilisateur a été ajouté avec succès</p>';
        }
?>

<form class="sign_in" action="../controller/users_panel.php" method="post">
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
    <label for="login">Pseudo</label>
        <input type="text" name="login" placeholder=""/>

    <?php
    if (isset($email_error))
            {
                echo '<p>L\'email saisi n\'est pas conforme. Veuillez réessayer.</p>';
            }
    ?>
    <label for="email">Adresse email</label>
        <input type="text" name="email" placeholder=""/>

    <?php
    if (isset($password_error))
            {
                echo '<p>Les deux mots de passe saisis ne sont pas identiques. Veuillez recommencer.</p>';
            }
    ?>
    <label for="password1">Mot de passe</label>
        <input type="password" name="password1" placeholder=""/>

    <label for="password">Confirmez le mot de passe</label>
        <input type="password" name="password2" placeholder=""/>

    <label for="newsletter">Inscription à la newsletter ?</label>
        <input type="checkbox" name="newsletter" checked="checked"/>
    
    <input type="hidden" name="current" value="user_add"/>

    <input type="submit" value="s'inscrire"/>
</form>