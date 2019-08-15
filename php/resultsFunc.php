<?php

// Starts session
session_start();

// Connects to database
include 'connect.php';

// Sanitizing user input
$input = $_POST['domain_input'];
$stripped = str_replace(' ', '', $input);
$sanitized_input = htmlspecialchars($stripped);
$sanitized_input = strtolower($sanitized_input);
$sanitized_input = $conn->real_escape_string($sanitized_input);
$_SESSION["session_input"] = $sanitized_input;

// String and SQL query to search the database for the searched term
// Checks for an exact match between the database and the searched term
$sqlString = "SELECT domain FROM biocomputedande WHERE domain LIKE '".$_SESSION["session_input"]."'";
$raw_results = $conn->query($sqlString);

// Alerts user to input something if search field is empty
if(empty($sanitized_input)) {
	echo "<script>";
	echo "alert('Please enter a domain.');";
	echo "window.location.href='/tst/registry.html';";
	echo "</script>";
	exit;
}

// If there are a non-zero amount of matches, print them all.
// Should not print more than one unless there is a duplicate in the database
if($raw_results->num_rows > 0) {
	while($results = $raw_results->fetch_array()) {
		echo "<p>" .$results['domain'] ." has already been registered.</p>";
	}
	
	include 'returnToSearch.php';
}

// If no results, the registration form and the returnToSearch button appear.
else {
	include 'registerDomain.php';
	echo "<br>";
	include 'returnToSearch.php';
}
