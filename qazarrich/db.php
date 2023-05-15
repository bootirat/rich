<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "rich";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("connection failed". mysqli_connect_error());
} else {
    "Успех";
} ?>
