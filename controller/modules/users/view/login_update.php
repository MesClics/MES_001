<?php
    if(isset($ok) AND $ok==TRUE)
            {
               include('../controller/log.php');
            }

    else
        {        
            if(isset($login_error))
                {?>
                    <p>Cet identifiant est déjà utilisé par un de nos visiteurs, merci d\'en choisir un autre.</p>
                <?php } ?>

            <h3>Changer mon identifiant</h3>
            <form action ="../controller/login_update.php" method="post">
                <label for="new_login">Veuillez saisir un nouvel identifiant</label>
                    <input type="text" name="new_login"/>
                    <input type="submit" value="Envoyer"/>
            </form>

        <?php }

         
?>

