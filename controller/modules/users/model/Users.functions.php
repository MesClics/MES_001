<?php
function getAllUsersfromDatabase($param, $order)
        {
            include('database_connection.php');
            $req = $database->query('SELECT * from users ORDER BY ' . $param . ' ' . $order .'');
            $rep = $req->fetchAll();
            return $rep;
        }
?>
        