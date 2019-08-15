<?php

// Connection to database
include 'connect.php';

// User input from registerDomain.php
$domain_input = $_POST['domain_input'];
$email_input = $_POST['email_input'];

// Sanitizing user input
$stripped  = str_replace(' ', '', $email_input);
$san_email = htmlspecialchars($stripped);
$san_email = $conn->real_escape_string($san_email);

// Check for empty fields to prevent form resubmission
if(empty($domain_input) || empty($san_email) ) {
	echo "<script type='text/javascript'>";
	echo "alert('Your email is invalid, please try again.');";
	echo "window.location.href='/tst/registry.html';";
	echo "</script>";
	exit;
}

// String and SQL query for inserting the domain and email into the database
$sqlString = "INSERT INTO biocomputedande (domain, email) VALUES ('$domain_input', '$san_email')";
$register_domain = $conn->query($sqlString);

// Sends a confirmation email to the user and to a set biocompute.org address
mail($san_email, "Biocompute Object Registration", "You have successfully registered the domain: $domain_input.", "From: noreply@biocomputeobject.org");
mail("hadley_king@gwu.edu", "Biocompute Object Registration", "The domain: $domain_input has been registered by $san_email.", "From: noreply@biocomputeobject.org");

// Popup to confirm registration and redirect to registry.html
echo "<script language='javascript'>";
echo "alert('Successfully registered! \\nDomain: $domain_input \\nEmail: $san_email');";
echo "window.location.href='/tst/registry.html';";
echo "</script>";

