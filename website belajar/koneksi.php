<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_form";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("connection failed: ". mysqli_connect_error());
} //echo "Connected sucsesfully";
?>