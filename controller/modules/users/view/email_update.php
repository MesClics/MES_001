<?php
    if(isset($ok) AND $ok==TRUE)
        {
           include('../controller/log.php');
        }

    else
        {        
            if (isset($email_error))
            {
                echo 'L\'adresse mail saisie n\'est pas valide, veuillez recommencer.';
            }
            ?>

            <h3>Changer mon email</h3>
            <form action ="../controller/email_update.php" method="post">
                <label for="new_email">Veuillez saisir votre nouvelle adresse email</label>
                    <input type="mail" name="new_email"/>
                    <input type="submit" value="Envoyer"/>
            </form>
            <?php
        }
?>

