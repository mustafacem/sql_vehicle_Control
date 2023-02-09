<?php 

include "config1.php";

?>

<form action="vechile_company_delete.php" method="POST">
<select name="Company_id">

<?php

$sql_command = "SELECT * FROM vehicle_company";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Company_id = $id_rows['Company_id'];
        $Name	 = $id_rows['Name'];
        $Country_of_origin = $id_rows['Country_of_origin'];
        $Share_price = $id_rows['Share_price'];
        echo "<option value=$Company_id>". $Name	 . " - " . $Company_id . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>