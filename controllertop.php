<?php

session_start();
include("tradingforyouappgini/lib.php");

// Check if the last activity timestamp is set
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
    // Last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header("Location: login.php"); // redirect to login page
    exit;
}
$_SESSION['last_activity'] = time(); // update last activity time stamp