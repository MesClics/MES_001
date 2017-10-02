<?php
    if(isset($_POST['order_id']) OR isset($_POST['order_login']) OR isset($_POST['order_mail']) OR isset($_POST['order_category']) OR isset($_POST['order_last_update']) OR isset($_POST['order_last_visit']))
        {
            if(isset($_POST['order_id']))
                {
                    $searchby= "id";
                    if($_POST['order_id']=="asc")
                       {
                           $order="ASC";
                       }
                
                    else
                        {
                            $order="DESC";
                        }
                }

            elseif(isset($_POST['order_login']))
                {
                    $searchby="login";
                    if($_POST['order_login']=="asc")
                       {
                           $order="ASC";
                       }
                
                    else
                        {
                            $order="DESC";
                        }
                }

            elseif(isset($_POST['order_mail']))
                {
                    $searchby="mail";
                   if($_POST['order_mail']=="asc")
                       {
                           $order="ASC";
                       }
                
                    else
                        {
                            $order="DESC";
                        }
                }
            
            elseif(isset($_POST['order_category']))
                {
                    $searchby="category";
                    if($_POST['order_category']=="asc")
                       {
                           $order="ASC";
                       }
                
                    else
                        {
                            $order="DESC";
                        }
                }
        
            elseif(isset($_POST['order_last_update']))
                {
                    $searchby="last_update";
                   if($_POST['order_last_update']=="asc")
                       {
                           $order="ASC";
                       }
                
                    else
                        {
                            $order="DESC";
                        }
                }
        
            elseif(isset($_POST['order_last_visit']))
                {
                    $searchby="last_visit";
                   if($_POST['order_last_visit']=="asc")
                       {
                           $order="ASC";
                       }
                
                    else
                        {
                            $order="DESC";
                        }
                }
        
        }
?>