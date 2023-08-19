<?php

$host="localhost";
$user="root";
$pass="";
$dbName="bloodbank";

$conn=mysqli_connect($host,$user,$pass,$dbName);

if (!$conn) {
    die("Conection Failed");
}


?>