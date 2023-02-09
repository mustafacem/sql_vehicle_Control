<?php

include "config1.php";

if(!empty($_POST['SSN']))
{
    $SSN = $_POST['SSN'];
    $sql_statement = "DELETE FROM employee WHERE SSN = $SSN";
    $result = mysqli_query($db, $sql_statement);
    echo "Deletion Complete!";
}

?>