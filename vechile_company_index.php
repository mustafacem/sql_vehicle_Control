<?php 

include "config1.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM vehicle_company"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Company_id = $row['Company_id']; 
    $Name = $row['Name']; 
    $Country_of_origin = $row['Country_of_origin'];
    $Share_price = $row['Share_price'];
    echo $Company_id . " " . $Name . " " . $Country_of_origin . " " . $Share_price . " " . "<br>"; 
} 

?>