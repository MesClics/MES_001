<ul class="log">
    <li id="connect"><a href="#sign_in">se connecter</a></li>
    <li id="sign_up"><a href="#sign_up">s'inscrire</a></li>
</ul>

<div class="bloc_cache">
    <div id="sign_in">
        <?php 
            if(isset($error_signin))
                {
                    echo 'Mauvais login ou mot de passe, merci de recommencer.';
                }
        ?>
        <form action="../controller/sign_in.php" method="post">
            <?php 
            if(isset($error_signin))
                {
                    echo 'Merci de saisir un identifiant.';
                }
            ?>
            <label for="login">Identifiant</label>
                <input type=text name="login"/>
            <?php 
            if(isset($error_signin))
                {
                    echo 'Merci de saisir un mot de passe.';
                }
            ?>
            <label for="password">Mot de passe</label>
                <input type=password name="password"/>
            <input type=submit value="se connecter">
        </form>
    </div>

    <div id="sign_up">
        <?php include('../controller/sign_up.php');?>
    </div>
</div>