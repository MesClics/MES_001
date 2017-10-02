<nav id="account_menu">
    <h1>Mon compte</h1>
    <ul>
        <li><a href="#login_update.php">Changer mon identifiant</a></li>
        <li><a href="#password_update.php">Changer mon mot de passe</a></li>
        <li><a href="#email_update.php">Modifier mon adresse mail</a></li>
        <li><a href="#newsletter_update">Gérer mon abonnement à la newsletter</a></li>
        <li><a href="#sign_out">Me désinscrire</a></li>
    </ul>
        
    
    <div class="bloc_cache">
        <div id="login_update">
                <?php
                include('../controller/login_update.php');
                ?>
        </div>
        
        <div id="password_update">
                <?php
                include('../controller/password_update.php');
                ?>
        </div>
        
        <div id="email_update">
                <?php
                include('../controller/email_update.php');
                ?>
        </div>
        
        <div id="newsletter_update">
                <?php
                include('../controller/newsletter_update.php');
                ?>
        </div>
        
        <div id="sign_out">            
            <h3>Me désinscrire</h3>
            <form action="../controller/sign_out.php" method="post">
                    <label for="submit">Attention, en poursuivant vous allez vous désinscrire</label>
                    <input type="hidden" name="confirm" value="oui"/>
                    <input name="submit" type="submit" value="Se désinscrire"/>
            </form>
        </div>
    </div>
    