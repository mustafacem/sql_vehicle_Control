<?php 

include "config1.php"; 

if (!empty($_POST['Vehicle_id'])){ 
    $Vehicle_id = $_POST['Vehicle_id']; 
    $Name = $_POST['Name'];
    $type = $_POST['type']; 
    $Cost = $_POST['Cost'];
    $sql_statement = "INSERT INTO vehicle(Vehicle_id, Name, type, Cost) VALUES ('$Vehicle_id', '$Name' , '$type', '$Cost')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Insertion Complete!";
} 
else 
{
    echo "Insertion Failed: No id has been entered!";
}

?>
