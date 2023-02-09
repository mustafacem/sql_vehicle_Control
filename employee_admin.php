<?php 

include "config1.php";

?>

<form action="employee_delete.php" method="POST">
<select name="SSN">

<?php

$sql_command = "SELECT * FROM employee ";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $SSN = $id_rows['SSN'];
        $Name = $id_rows['Name'];
        $Age = $id_rows['Age'];
        $Salary = $id_rows['Salary'];
        echo "<option value=$SSN>". $SSN . " - " . $Name . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>