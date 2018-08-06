<?php

session_start();

session_unset();
session_destroy();

//clear browser cache to prevent back button accessing previous user session details

//redirect to login screen
header("Location: signin.html");

?>
