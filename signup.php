<!--<?php

/* This document parses form input and signs up the user then redirects to the user dashboard */

//start session
session_start();

include 'dbconnect.php';
include 'functions.php';

//check if log in session variables are set and if user is already logged in
// if user is already logged in, unset log in session variables and prompt user to login
// login variables are email and password

if (!isset($_SESSION["signedIn"])) {
  //unset session variables
  header('Location:signup.html');
}-->

//parse form variables
$firstName = ucfirst($_POST["firstName"]);
$lastName = ucfirst($_POST["lastName"]);
$email = $_POST["email"];
$password = $_POST["password"];
$title = $_POST["title"];
$landGrantArea = $_POST["landGrantArea"];
$landGrantSpecificArea = $_POST["landGrantSpecificArea"];

$rowCount = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email = '".$email."'"));

$insertUserDataQuery = "INSERT INTO users (firstName, lastName, email, password, title, landGrantArea, landGrantSpecificArea) VALUES ('".$firstName."', '".$lastName."', '".$email."', '".$password."', '".$title."', '".$landGrantArea."', '".$landGrantSpecificArea."');";

if ($rowCount > 0) {
  // email exists within database, inform user of error and prompt to sign up with different email
  echo "Email exists within database, sign up with different email<br>";
} else {
  //insert user session variables to database and redirect user to user dashboard
  mysqli_query($conn, $insertUserDataQuery);

  //set session variables
  $_SESSION["firstName"] = $_POST["firstName"];
  $_SESSION["lastName"] = $_POST["lastName"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["password"] = $_POST["password"];
  $_SESSION["title"] = $_POST["title"];
  $_SESSION["landGrantArea"] = $_POST["landGrantArea"];
  $_SESSION["landGrantSpecificArea"] = $_POST["landGrantSpecificArea"];
  $_SESSION["lastActivity"] = time(); //update last activity timestamp

  $_SESSION["signedIn"] = "true";

  header('Location:dashboard.php');
}

include 'dbclose.php';

?>
