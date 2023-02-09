<?php 

include "config1.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM vehicle"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Vehicle_id = $row['Vehicle_id']; 
    $Name = $row['Name']; 
    $type = $row['type']; 
    $Cost = $row['Cost'];
    echo $Vehicle_id. " " . $Name . " " . $type . " " . $Cost .  "<br>"; 
} 

?>