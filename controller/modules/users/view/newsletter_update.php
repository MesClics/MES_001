<?php
    
    if(isset($ok))
    {
        include('../../../../controller/index.php');
        if(isset($newsletter_on))
        {
            echo 'Votre adresse mail a bien été ajoutée à la liste de diffusion de notre newsletter.';
        }
        
        else
        {
            echo 'Votre désinscription de la liste de diffusion de notre newsletter a bien été prise en compte.';
        }
    }

    else
    {
        echo '
            <h3>Gérer mon abonnement à la newsletter</h3>
            <form action="../controller/newsletter_update.php" method="post">';
        
        if(isset($newsletter_on))
            {
                echo'
                <label for="newsletter">Vous êtes actuellement abonné à notre newsletter </label>
                <input name="newsletter" type="submit" value="Se désabonner"/>';
            }
        
        else
        {
            echo'
            <label for="newsletter">Vous n\'êtes pas encore abonné à notre newsletter </label>
            <input name="newsletter" type="submit" value="S\'abonner"/>';
        }

        echo '</form>';
    }
