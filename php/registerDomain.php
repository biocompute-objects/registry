<?php 

// Starts session
session_start();

// HTML form for registering a domain
echo "That domain doesn't exist, would you like to register: <b>".$_SESSION['session_input']."</b>";
echo "<br>";
echo "<br>";
echo "<form action='insertDomain.php' method='POST'>";
echo "<input type='email' name='email_input' placeholder='Email Address'>";
echo "<input type='submit' name='submit' value='Register'>";
echo "<input type='hidden' name='domain_input' value=\"{$_SESSION['session_input']}\">";
echo "</form>";

