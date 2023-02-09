<?php

include "config1.php";

if(!empty($_POST['Company_id']))
{
    $Company_id = $_POST['Company_id'];
    $sql_statement = "DELETE FROM vehicle_company WHERE Company_id = $Company_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Deletion Complete!";
}

?>