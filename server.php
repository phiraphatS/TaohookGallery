<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taohookgallery_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($conn, 'SET CHARACTER SET UTF8');

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}

?>