<?php

// Credentials
$servername = "localhost";	
$username = "mjoseph";
$password = "Sushihotdog26$%";
$dbname = "toydb";

// Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection error handling
if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>

