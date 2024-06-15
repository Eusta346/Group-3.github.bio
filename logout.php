<?php
session_start();


//destroy session data
$_SESSION = array();
session_destroy();

//redirect user to the login page
header("Location: mary.html")
?>