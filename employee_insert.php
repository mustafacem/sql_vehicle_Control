<?php 

include "config1.php"; 

if (!empty($_POST['SSN'])){ 
    $SSN = $_POST['SSN']; 
    $Name = $_POST['Name']; 
    $Salary = $_POST['Salary'];
    $Age = $_POST['Age'];
    $sql_statement = "INSERT INTO employee(SSN, Name, Salary, Age) VALUES ('$SSN','$Name','$Salary', '$Age')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Insertion Complete!";
} 
else 
{
    echo "Insertion Failed: No id has been entered!";
}

?>
