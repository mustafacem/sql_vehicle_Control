<?php

include "config1.php";

if(!empty($_POST['Vehicle_id']))
{
    $Vehicle_id = $_POST['Vehicle_id'];
    $sql_statement = "DELETE FROM vehicle WHERE Vehicle_id = $Vehicle_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Deletion Complete!";
}

?>