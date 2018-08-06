<?php

/* This document parses form input and signs up the user then redirects to the user dashboard */

//start session
session_start();

include 'dbconnect.php';
include 'functions.php';

//check if log in session variables are set and if user is already logged in
// if user is already logged in, unset log in session variables and prompt user to login
// login variables are email and password

if (isset($_SESSION["signedIn"])) {
  //unset session variables
  session_unset();
  header('Location:signin.html');
}

//parse form variables
$email = $_POST["email"];
$password = $_POST["password"];
$_SESSION["lastActivity"] = time(); //update last activity timestamp

//$checkLoginQuery = "SELECT * FROM users WHERE email = '".$_SESSION["email"]."' AND password = '".$_SESSION["password"]."'";
$checkLoginQuery = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
$resultCheckLoginQuery = mysqli_query($conn, $checkLoginQuery);
$row = mysqli_fetch_assoc($resultCheckLoginQuery);
$rowCount = mysqli_num_rows($resultCheckLoginQuery);

if ($rowCount > 0 && $rowCount < 2) {
  // email and password match(es) exist in database
  //echo "Name: ".$row["firstName"]." ".$row["lastName"]."<br>Email: ".$row["email"]."<br>Title: ".$row["title"]."<br>Land Grant Area: ".$row["landGrantArea"].", ".$row["landGrantSpecificArea"];

  // set user session variables
  $_SESSION["user_id"] = $row["user_id"];
  $_SESSION["firstName"] = $row["firstName"];
  $_SESSION["lastName"] = $row["lastName"];
  $_SESSION["email"] = $row["email"];
  $_SESSION["title"] = $row["title"];
  $_SESSION["landGrantArea"] = $row["landGrantArea"];
  $_SESSION["landGrantSpecificArea"] = $row["landGrantSpecificArea"];

  $_SESSION["signedIn"] = "true";

  //free result set
  mysqli_free_result($resultCheckLoginQuery);

  header('Location:dashboard.php');

} else {
  // email and password match doesn't exist in database
    //prompt user to check login information and try again
    echo "Login incorrect";
}

include 'dbclose.php';

?>
