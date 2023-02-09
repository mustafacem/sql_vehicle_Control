<?php 

include "config1.php"; 

if (($_POST['form_input'] == '1')){ 

    $sql_statement = "SELECT Company_id FROM vehicle_company"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Company_id = $row['Company_id']; 

        echo $Company_id . "<br>"; 
    } 
} 
else if(($_POST['form_input'] == '2'))
{
    $sql_statement = "SELECT Name FROM vehicle_company"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Name = $row['Name']; 

        echo $Name . "<br>"; 
    } 
}
else if(($_POST['form_input'] == '3'))
{
    $sql_statement = "SELECT Country_of_origin FROM vehicle_company"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Country_of_origin = $row['Country_of_origin']; 

        echo $Country_of_origin . "<br>"; 
    } 
}

else if(($_POST['form_input'] == '4'))
{
    $sql_statement = "SELECT Share_price FROM vehicle_company"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Share_price = $row['Share_price']; 

        echo $Share_price . "<br>"; 
    } 
}
else 
{
    echo "Input is wrong.";
}

?>