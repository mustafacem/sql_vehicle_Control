<?php 

include "config1.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM employee"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $SSN = $row['SSN']; 
    $Name = $row['Name']; 
    $Salary = $row['Salary'];
    $Age = $row['Age'];
    echo $SSN . " " . $Name . " " . $Salary . " " . $Age . " " .  "<br>"; 
} 

?>