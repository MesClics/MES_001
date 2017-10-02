<h4>Rechercher un utilisateur</h4>
    <form action="../controller/users_panel.php" method="post">
        <label for="id">Par son identifiant</label>
            <input type="text" name="id" />
        <label for="login">Par son login</label>
            <input type="text" name="login" />
        <label for="email">Par son email</label>
            <input type="mail" name="email"/>
        <input type="hidden" name="current" value="user_search_one"/>
        <input type="submit" value="Rechercher">
    </form>
    
    <h4>Afficher tous les utilisateurs</h4>
    <form action="../controller/users_panel.php" method="post">
        <?php
        if(isset($_POST['order_id']) AND $order=="ASC")
        {
            echo '<button type="submit" name="order_id" value="desc">Trier par identifiants</button>';
        }
        else
        {
             echo '<button type="submit" name="order_id" value="asc">Trier par identifiants</button>';
        }

        if(isset($_POST['order_login']) AND $order=="ASC")
        {
            echo '<button type="submit" name="order_login" value="desc">Trier par logins</button>';
        }
        else
        {
             echo '<button type="submit" name="order_login" value="asc">Trier par logins</button>';
        }

        if(isset($_POST['order_mail']) AND $order=="ASC")
        {
            echo '<button type="submit" name="order_mail" value="desc">Trier par emails</button>';
        }
        else
        {
             echo '<button type="submit" name="order_mail" value="asc">Trier par emails</button>';
        }

        if(isset($_POST['order_category']) AND $order=="ASC")
        {
            echo '<button type="submit" name="order_category" value="desc">Trier par rôle</button>';
        }
        else
        {
             echo '<button type="submit" name="order_category" value="asc">Trier par rôle</button>';
        }

        if(isset($_POST['order_last_update']) AND $order=="ASC")
        {
            echo '<button type="submit" name="order_last_update" value="desc">Trier par date de modification</button>';
        }
        else
        {
             echo '<button type="submit" name="order_last_update" value="asc">Trier par date de modification</button>';
        }

        if(isset($_POST['order_last_visit']) AND $order=="ASC")
        {
            echo '<button type="submit" name="order_last_visit" value="desc">Trier par date de dernière visite</button>';
        }
        else
        {
             echo '<button type="submit" name="order_last_visit" value="asc">Trier par date de dernière visite</button>';
        }?>
        
    <input type="hidden" name="current" value="user_search_all"/>
    </form>

    <?php
        include('../controller/user_search_list.php');
    ?>
