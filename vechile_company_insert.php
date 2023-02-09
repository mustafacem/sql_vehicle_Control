<?php 

include "config1.php"; 

if (!empty($_POST['Company_id'])){ 
    $Company_id = $_POST['Company_id']; 
    $Name = $_POST['Name']; 
    $Country_of_origin = $_POST['Country_of_origin'];
    $Share_price = $_POST['Share_price'];
    $sql_statement = "INSERT INTO vehicle_company(Company_id, Name, Country_of_origin, Share_price) VALUES ('$Company_id','$Name','$Country_of_origin', '$Share_price')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Insertion Complete!";
} 
else 
{
    echo "Insertion Failed: No id has been entered!";
}

?>
