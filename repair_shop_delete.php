<?php

include "config1.php";

if(!empty($_POST['Shop_id']))
{
    $Shop_id = $_POST['Shop_id'];
    $sql_statement = "DELETE FROM repair_shop WHERE Shop_id = $Shop_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Deletion Complete!";
}

?>