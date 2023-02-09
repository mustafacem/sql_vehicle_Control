<?php 

include "config1.php"; 

if (($_POST['form_input'] == '1')){ 

    $sql_statement = "SELECT SSN FROM employee"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $SSN = $row['SSN']; 

        echo $SSN . "<br>"; 
    } 
} 
else if(($_POST['form_input'] == '2'))
{
    $sql_statement = "SELECT Name FROM employee"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Name = $row['Name']; 

        echo $Name . "<br>"; 
    } 
}
else if(($_POST['form_input'] == '3'))
{
    $sql_statement = "SELECT Salary FROM employee"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Salary = $row['Salary']; 

        echo $Salary . "<br>"; 
    } 
}
else if(($_POST['form_input'] == '4'))
{
    $sql_statement = "SELECT Age FROM employee"; 

    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Age = $row['Age']; 

        echo $Age . "<br>"; 
    } 
}

else 
{
    echo "Input is wrong.";
}

?>