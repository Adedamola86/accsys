<?php
/* This document gets data from the program initiation form, saves the data in session variables and stores the data in the database  */

//Start the session
session_start();

//connect to database
include 'dbconnect.php';
include 'functions.php';

//get session id
//getSessionId($sessionId);
//echo "Session id is " . $_SESSION["id"];

//get the program initiation segment and timestamp
getTimeCurrentSegmentSaved()."<br>";
$_SESSION["status"] = "pending";

//get form values, save as session variables then insert to database

switch ($_SESSION["programInitiationSegment"]) {
  case 'Cover Page':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"]."<br>";

    //session variables for Cover Page
    $_SESSION["programTitle"] = ucfirst($_POST["programTitle"]);
    $_SESSION["contactPerson"] = ucfirst($_POST["contactPerson"]);
    $_SESSION["fundingSource"] = $_POST["fundingSource"];
    $_SESSION["startDate"] = $_POST["startDate"];
    $_SESSION["endDate"] = $_POST["endDate"];

    // Program Number is generated by joining firstname-lastname-programTitle-startDate
    $_SESSION["programNumber"] = $_SESSION["firstName"] ."-". $_SESSION["lastName"] ."-". $_SESSION["programTitle"] ."-". str_replace('/','',$_POST["startDate"]);

    //echo "Program Title: " . $_SESSION["programTitle"]."<br>";
    echo "Contact Person: " . $_SESSION["contactPerson"]."<br>";
    echo "Funding Source: " . $_SESSION["fundingSource"]."<br>";
    //echo "Start Date: " . $_SESSION["startDate"]."<br>";
    //echo "End Date: " . $_SESSION["endDate"]."<br>";
    echo "Program Number: " . $_SESSION["programNumber"]."<br>";
    echo "Status: " . $_SESSION["status"]."<br>";

    //If logged in, verify first and last name
    echo "Your name is: " . $_SESSION["firstName"] ." ". $_SESSION["lastName"] ."<br>";

    //save to database
    // check if programNumber already exists within database, if none then insert, else prompt error message
    $checkProgramNumber = "SELECT * FROM programs WHERE programNumber = '".$_SESSION["programNumber"]."'";
    $resultCheckProgramNumber = mysqli_query($conn, $checkProgramNumber);
    $rowCount = mysqli_num_rows($resultCheckProgramNumber);

    $insertProgramDataQuery = "INSERT INTO programs (title, contactPerson, fundingSource, startDate, endDate, programNumber, status) VALUES ('".$_SESSION["programTitle"]."', '".$_SESSION["contactPerson"]."', '".$_SESSION["fundingSource"]."', '".$_SESSION["startDate"]."', '".$_SESSION["endDate"]."', '".$_SESSION["programNumber"]."', '".$_SESSION["status"]."');";

    //check database if programNumber already exists
    if ($rowCount>0) { //Generate error if programNumber exists within database
      echo "Program Number already exists within accsys. Would you like to attempt a new Program Initiation Process?<br><a href=\"newProgramInitiationProcess.php\">Yes</a> | <a href=\"dashboard.php\">No</a>";
    } else { //Add to database if programNumber doesn't exist within database
      if (mysqli_query($conn, $insertProgramDataQuery)) {
        echo "New program created<br>";
        //echo "Result set does not have " .$rowCount. " rows.<br>";

        //update status
        $_SESSION["status"] = "complete";



        //redirect to Program Support
        //header("Location: dashboard.php");
        echo "<a href=\"dashboard.php\">Dashboard</a><br>";
      } else {
        echo "Error: " .$insertProgramDataQuery. "<br>".mysqli_error($conn);
      }
    }

    //update on user dashboard
      //getStatus($_SESSION["programInitiationSegment"], $_SESSION["status"]);

      //update on user dashboard
      //updateUserDashboardStats();

    break;
  case 'Program Support':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"];
    //session variables for Program Support
    break;
  case 'Goals':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"];
    //session variables for Goals
    break;
  case 'Summary':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"];
    //session variables for Summary
    break;
  case 'Target Audience':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"];
    //session variables for Target Audience
    break;
  case 'Outcome Measures':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"];
    //session variables for Outcome Measures
    break;
  case 'Classifications':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"];
    //session variables for Classifications
    break;
  case 'Submit':
    echo "Current Segment Title is " . $_SESSION["programInitiationSegment"];
    //get session variables for Submit

    $status = "complete"; // if Submit segment is posted to database, then status is complete
    break;
}

//close database connection
include 'dbclose.php';
?>
