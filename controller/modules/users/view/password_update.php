<?php
    if(isset($ok) AND $ok==TRUE)
        {
           include('../controller/log.php');
        }

    else
        {
            echo '
            <h3>Changer mon mot de passe</h3>
            <form action ="../controller/password_update.php" method="post">';

                if(isset($error_old_password))
                    {
                        echo '<p>le mot de passe saisi n\'est pas correct</p>';
                    }
                    echo '<label for="old_password">Veuillez saisir votre ancien mot de passe</label>
                        <input type="password" name="old_password"/>';

                if(isset($error_password))
                    {
                        echo '<p>Les mots de passe saisis ne sont pas identiques.</p>';
                    } 

                    echo '<label for="new_password">Veuillez saisir votre nouveau mot de passe</label>
                        <input type="password" name="new_password"/>
                    <label for="new_password2">Veuillez saisir à nouveau votre nouveau mot de passe</label>
                        <input type="password" name="new_password2"/>
                        <input type="submit" value="Envoyer"/>
            </form>';

           } 
?>

