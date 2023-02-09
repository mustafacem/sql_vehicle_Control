<?php 

include "config1.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM repair_shop"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Name = $row['Name']; 
    $Shop_id = $row['Shop_id']; 
    $Rating = $row['Rating'];
    $City = $row['City'];
    echo $Name . " " . $Shop_id . " " . $Rating . " " . $City . " " . "<br>"; 
} 

?>