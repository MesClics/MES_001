<h3>Modifier un utilisateur</h3>

    <!--Affichage de l'éventuel message de confirmation de modification ou de suppression du compt utilisateur-->
    <?php
        if(isset($user_update) AND !isset($user_sign_out))
            {
                echo '<p>Les données de l\'utilisateur ont été modifiées avec succès</p>';
            }
            
        if(isset($user_sign_out))
            {
                echo '<p>L\'utilisateur a été supprimé</p>';
            }

    //Affichage des résultats de la recherche
        include('../view/user_search.php');
    ?>
