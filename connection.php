<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_bit7tha2";

$conn = new mysqli($host, $user, $password, $database);
if(!$conn) die("Connection failed: " .mysqli_connect_error());
