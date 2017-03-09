<?php

// Start new session or resume one
session_start();

// Simulate user signed in
$_SESSION["user_id"] = 1;

// Connect to Database
$db = new PDO("sqlite:/Users/dailand10/Desktop/PHP-ying/database");

// Handle unsigned user
if(!isset($_SESSION["user_id"])) {
    die("You are not signed in !");
}

?>
