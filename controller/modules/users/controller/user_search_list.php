<?php

    if(isset($user_search_one))
        {
            include('../view/user_search_list.php');
            unset($user_search_one);
        }
    
   if(isset($user_search_all))
        {
            include_once('../../../../controller/modules/users/model/Users.functions.php');
            $list = getAllUsersfromDatabase($searchby, $order);

            foreach($list as $key)
                {
                    include('../view/user_search_list.php');            
                }
            unset($user_search_all);
        }
    
?>