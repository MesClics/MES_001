<form id="users_list_update" action="../controller/users_panel.php" method="post">
    <input type ="text" name="id" value="<?php echo $key['id'];?>" readonly/>
    <input type ="text" name="new_login" placeholder="<?php echo $key['login'];?>"/>
    <input type ="password" name="new_password" placeholder="<?php echo $key['password'];?>"/>
    <input type ="email" name="new_email" placeholder="<?php echo $key['mail'];?>"/>
    <input type ="text" name="new_date" placeholder="<?php echo $key['sign_up_date'];?>"  readonly/>
    <input type ="text" name="last_update" placeholder="<?php echo $key['last_update'];?>"  readonly/>
    <input type ="text" name="last_visit" placeholder="<?php echo $key['last_visit'];?>"  readonly/>
    <input type ="text" name="new_category" placeholder="<?php echo $key['category'];?>"/>
    <input type ="text" name="new_newsletter" placeholder="<?php echo $key['newsletter'];?>"/>
    <input type ="hidden" name="current_update" value="user_update"/>
    <input type="submit" value="Modifier"/>
    <button type="submit" name="current_out" value="<?php echo $key['id'];?>">Supprimer</button>
</form>