<?php 

include "config1.php"; 

if (($_POST['form_input'] == '1')){ 

    $sql_statement = "SELECT Shop_id FROM repair_shop"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Shop_id = $row['Shop_id']; 

        echo $Shop_id . "<br>"; 
    } 
} 
else if(($_POST['form_input'] == '2'))
{
    $sql_statement = "SELECT Name FROM repair_shop"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Name = $row['Name']; 

        echo $Name . "<br>"; 
    } 
}
else if(($_POST['form_input'] == '3'))
{
    $sql_statement = "SELECT Rating FROM repair_shop"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Rating = $row['Rating']; 

        echo $Rating . "<br>"; 
    } 
}
else if(($_POST['form_input'] == '4'))
{
    $sql_statement = "SELECT City FROM repair_shop"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $City = $row['City']; 

        echo $City . "<br>"; 
    } 
}

else 
{
    echo "Input is wrong.";
}

?>