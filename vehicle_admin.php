<?php 

include "config1.php";

?>

<form action="vehicle_delete.php" method="POST">
<select name="Vehicle_id">

<?php

$sql_command = "SELECT * FROM vehicle";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Vehicle_id = $id_rows['Vehicle_id'];
        $Name = $id_rows['Name'];
        $type= $id_rows['type'];
        $Cost= $id_rows['Cost'];
        echo "<option value=$Vehicle_id>". $Name . " - " . $Vehicle_id . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>