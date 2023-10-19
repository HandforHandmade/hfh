<?php
$Base_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
/*============================= Start :Master Database Connection =============================== */

if (!in_array('hfh.com', explode('/', $Base_link))) {

    $master_servername = "localhost";
    $master_username = "root";
    $master_password = 'Password123*';
    $master_db = "hfh_final";
}
else{

    $master_servername = "database-1.chnpkhgsoz96.ap-south-1.rds.amazonaws.com";
    $master_username = "admin";
    $master_password = 'Admin123*++';
    $master_db = "hfh_final";

}

$master_servername = "database-1.chnpkhgsoz96.ap-south-1.rds.amazonaws.com";
$master_username = "admin";
$master_password = 'Admin123*++';
$master_db = "hfh_final";

// Create connection
$master_conn = new mysqli($master_servername, $master_username, $master_password,$master_db);

// Check connection
if ($master_conn->connect_error)
{
    die("Connection failed: " . $master_conn->connect_error);
}
/*=============================  End : Master Database Connection =============================== */
?>
