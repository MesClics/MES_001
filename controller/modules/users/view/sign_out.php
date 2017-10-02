<p>Bonjour <?php echo $_COOKIE['login']; ?>!</p>

<ul class="log">
    <li><a href="../controller/account.php">mon compte</a></li>
    <li id="log_out"><a href="../controller/log_out.php">se déconnecter</a></li>
    
    <!--SPECIFIQUE TREECUP -->
    <?php
    include('../controller/admin_access.php');
    ?>
    <!----------------------->
    <!--ACCES PARTIE ADMINISTRATION-->
    <?php
    include('../controller/users_panel_access.php');
    ?>
    <!------------------------------->
</ul>

