<?php 

include "config1.php";

?>

<form action="repair_shop_delete.php" method="POST">
<select name="Shop_id">

<?php

$sql_command = "SELECT * FROM repair_shop";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Shop_id = $id_rows['Shop_id'];
        $Name = $id_rows['Name'];
        $Rating = $id_rows['Rating'];
        echo "<option value=$Shop_id>". $Name . " - " . $Shop_id . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>