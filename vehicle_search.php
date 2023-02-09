<?php 

#Searches for vehicles in land_vehicles under input price

include "config.php"; 

if (!empty($_POST['form_input'])){ 

    $input = $_POST['form_input'];
   
    $sql_statement = "SELECT * FROM land_vehicles WHERE price <= '$input'" ; 

    $result = mysqli_query($db, $sql_statement);

    $gate = true;

    $cheapest_land_vehicle_id;
    $cheapest_land_vehicle_name;
    $cheapest_type;
    $cheapest_price = 999999999;
    $cheapest_tire_count;
    $cheapest_height;

    $expensive_land_vehicle_id;
    $expensive_land_vehicle_name;
    $expensive_type;
    $expensive_price = 0;
    $expensive_tire_count;
    $expensive_height;
    
    while($row = mysqli_fetch_assoc($result)) {
        $land_vehicle_id = $row['land_vehicle_id']; 
        $land_vehicle_name = $row['land_vehicle_name']; 
        $price = $row['price'];
        $tire_count = $row['tire_count'];
        $height = $row['height'];
        $type = $row['type'];
        $gate = false;
        if ($price < $cheapest_price)
        {
            $cheapest_land_vehicle_id = $land_vehicle_id;
            $cheapest_land_vehicle_name = $land_vehicle_name;
            $cheapest_type = $type;
            $cheapest_price = $price;
            $cheapest_tire_count = $tire_count;
            $cheapest_height = $height;
        }
        if ($price > $expensive_price)
        {
            $expensive_land_vehicle_id = $land_vehicle_id;
            $expensive_land_vehicle_name = $land_vehicle_name;
            $expensive_type = $type;
            $expensive_price = $price;
            $expensive_tire_count = $tire_count;
            $expensive_height = $height;
        }
        echo $land_vehicle_id . " " . $land_vehicle_name . " " . $type . " " . $price . " " . $tire_count . " " . $height . "<br>"; 
    }
    if ($gate == true)
    {
        echo "No Vehicles Under Price " . $_POST['form_input'] . " Found.";
    }
    else
    {
        echo "<br>Cheapest Product: " . $cheapest_land_vehicle_id . " " . $cheapest_land_vehicle_name . " " . $cheapest_type . " "
         . $cheapest_price . " " . $cheapest_tire_count . " " . $cheapest_height . "<br>";
        echo "<br>Most Expensive Product: " . $expensive_land_vehicle_id . " " . $expensive_land_vehicle_name . " " . $expensive_type . " "
         . $expensive_price . " " . $expensive_tire_count . " " . $expensive_height . "<br>";
    }
} 
else 
{
    echo "Please Enter a Valid Input!";
}

?>