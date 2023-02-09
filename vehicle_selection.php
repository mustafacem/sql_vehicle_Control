<?php 

include "config1.php"; 

if (($_POST['form_input'] == '1')){ 

    $sql_statement = "SELECT Vehicle_id FROM vehicle"; 

    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Vehicle_id = $row['Vehicle_id']; 

        echo $Vehicle_id . "<br>"; 
    } 
} 
else if(($_POST['form_input'] == '2'))
{
    $sql_statement = "SELECT Name FROM vehicle"; 

    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Name = $row['Name']; 

        echo $Name . "<br>"; 
    } 
}


else if(($_POST['form_input'] == '3'))
{
    $sql_statement = "SELECT type FROM vehicle"; 

    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $type = $row['type']; 

        echo $type . "<br>"; 
    } 
}
else if(($_POST['form_input'] == '4'))
{
    $sql_statement = "SELECT Cost FROM vehicle"; 

    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Cost = $row['Cost']; 

        echo $Cost . "<br>"; 
    } 
}
else 
{
    echo "Input is wrong.";
}

?>