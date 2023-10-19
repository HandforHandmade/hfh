<?php
/*
@Author: Pinank Soni
@use: Logout Page
*/
session_start();

session_regenerate_id();
session_destroy();
header('Location: index.php');
?>