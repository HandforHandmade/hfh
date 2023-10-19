<?php

error_reporting(1);
error_reporting(E_ALL);
 
 
include("connection.php");

 global $master_conn;

 $userQry = mysqli_query($master_conn, "SELECT * FROM user_master");

while ($RowData = mysqli_fetch_assoc($userQry)) {
    $id = $RowData['id'];
    $string =  'http://localhost/hfh/assets/attachment/users/';

    $newAttachment = str_replace($string,"",$RowData['image']);
    echo $query = "UPDATE user_master SET image='$newAttachment' WHERE id=" . $id;
    echo "<br>";
    $re = mysqli_query($master_conn, $query);

}


?>