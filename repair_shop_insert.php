<?php 

include "config1.php"; 

if (!empty($_POST['Shop_id'])){ 
    $Shop_id = $_POST['Shop_id']; 
    $Name = $_POST['Name']; 
    $Rating = $_POST['Rating'];
    $City = $_POST['City'];
    $sql_statement = "INSERT INTO repair_shop(Shop_id, Name, Rating, City) VALUES ('$Shop_id','$Name','$Rating', '$City')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Insertion Complete!";
} 
else 
{
    echo "Insertion Failed: No id has been entered!";
}

?>
