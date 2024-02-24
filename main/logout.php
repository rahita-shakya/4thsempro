<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page (assuming your login page is named login.php)
header("Location: index.html");
exit(); // Ensure no further code execution after redirection
?>
