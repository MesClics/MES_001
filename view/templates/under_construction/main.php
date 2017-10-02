<div class="mess_popup">
<!-- message d'accueil, site en construction -->
    <h1 class="logo">MesClics</h1>
    <h2>conception et réalisation web<br/>
    graphisme et identité visuelle</h2>
    <aside id="infos">
        <p>Rome ne s'est pas faite en un jour!</p>
        <p>Nous serons bientôt en ligne</p>
    
        <p class="contact">Vous avez un projet? N'hésitez pas à me contacter :</p>
        <address>
            <a href="mailto:contact@mesclics.fr">contact@mesclics.fr</a>
        </address>
        <p class="credits">2017</p>
    </aside>       
</div>
<!-- Formulaires de connexion / déconnexion -->
<?php
if(!isset($_SESSION['user']) OR !$_SESSION['user']['password']){
?>
    <div class="sign-in">   
        <h3>Vous avez déjà un compte client ? connectez-vous</h3>
        <?php include($vars['forms']['sign-in']);?>     
    </div>
<?php
} else{
?>
    <div class="sign-out">
        <h3>Vous êtes connecté sur votre compte client</h3>
        <?php include($vars['forms']['sign-out']);?>
    </div>
<?php
}
?>