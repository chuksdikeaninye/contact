<?php
$servername = "remotemysql.com";
$username = "eIVXThqj8k";
$password = "PdsF2AGPZT";
$database = "eIVXThqj8k";

// Creating connection
$connect = mysqli_connect($servername,$username,$password,$database);

// Checking connection
if (!$connect) {
    echo ("Connection failed:" . mysqli_connect_error());
}


?>
