<?php 

if($_POST['form_input'] == "admin"){
    echo "Access Granted" . "<a href='http://127.0.0.1/Vehicle_Companies/Project_Step_3/admin_hub.html'>Click Here To Enter as Admin!</a>";
}
else{
    echo "Access Denied" . "<a href='http://127.0.0.1/Vehicle_Companies/Project_Step_3/hub.html'>Click Here To Return</a>";
}

?>