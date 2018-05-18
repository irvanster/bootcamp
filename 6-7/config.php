<?php
$host = "localhost";
$username = "root";
$password = "rahasia";
$db = "blog";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>