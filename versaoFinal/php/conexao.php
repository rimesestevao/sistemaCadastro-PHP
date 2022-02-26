<?php

$servername = "127.0.0.1";
$database = "riogamer";
$username = "riogamer";
$password = "abelha2021";

// Create connection
$link = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
} 
echo "Connected successfully";
?>