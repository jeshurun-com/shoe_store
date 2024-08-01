<?php
// Start session if not already started
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to login page or any other desired page
header("Location: login.php");
exit;
?>
