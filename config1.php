<?php

$db = mysqli_connect('127.0.0.1','root','','vh_db');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>