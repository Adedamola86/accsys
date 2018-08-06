<?php

/* This document parses program data and stores to database */

//start the session
session_start();

//connect to database
include 'dbconnect.php';
include 'functions.php';

$status = "Segment incomplete";

switch ($_SESSION["programInitiationSegment"]) {
  case 'Cover Page':

  //parse form data as variables for Cover Page
  $programTitle = ucfirst($_POST["programTitle"]);
  $contactPerson = ucfirst($_POST["contactPerson"]);
  $fundingSource = $_POST["fundingSource"];
  $startDate = $_POST["startDate"];
  $endDate = $_POST["endDate"];

  //generate program number
  $programNumber = $firstName ."-". $lastName ."-". $programTitle ."-". str_replace('/','',$startDate);

  //set status
  $status = $_SESSION["programInitiationSegment"];

  //variables for query
  $checkProgramNumber = "SELECT * FROM programs WHERE programNumber = '".$programNumber."'";
  $resultCheckProgramNumber = mysqli_query($conn, $checkProgramNumber);
  $rowCount = mysqli_num_rows($resultCheckProgramNumber);

/*
  $insertProgramDataQuery = "INSERT INTO programs (title, contactPerson, fundingSource, startDate, endDate, programNumber, status) VALUES ('".$programTitle."', '".$contactPerson."', '".$fundingSource."', '".$startDate."', '".$endDate."', '".$programNumber."', '".$status."')";
*/
  $insertProgramDataQuery = "INSERT INTO programs (title, contactPerson, fundingSource, startDate, endDate, programNumber, status, user_fk) VALUES ('".$programTitle."', '".$contactPerson."', '".$fundingSource."', '".$startDate."', '".$endDate."', '".$programNumber."', '".$status."', '".$_SESSION["user_id"]."')";

  //check database if programNumber already exists
  if ($rowCount > 0) {
    //Generate error if programNumber exists within database
    echo "Program Number already exists within accsys. Would you like to attempt a new Program Initiation Process?<br><a href=\"newprograminitiationprocess.php\">Yes</a> | <a href=\"dashboard.php\">No<br></a>";
  } else {
    //Add to database if programNumber doesn't exist within database
    mysqli_query($conn, $insertProgramDataQuery);

    //redirect to Program Support page
    header('Location:newprograminitiation-programsupport.php');

  }

  break;
  case 'Program Support':
  //parse form data as variables for Program Support
  $scientistFacultyNonStudents = $_POST["scientistFacultyNonStudents"];
  $scientistUndergraduate = $_POST["scientistUndergraduate"];
  $scientistGraduate = $_POST["scientistGraduate"];
  $scientistPostDoctorate = $_POST["scientistPostDoctorate"];
  $scientistComputedTotalByRole = $_POST["scientistComputedTotalByRole"];

  $professionalFacultyNonStudents = $_POST["professionalFacultyNonStudents"];
  $professionalUndergraduate = $_POST["professionalUndergraduate"];
  $professionalGraduate = $_POST["professionalGraduate"];
  $professionalPostDoctorate = $_POST["professionalPostDoctorate"];
  $professionalComputedTotalByRole = $_POST["professionalComputedTotalByRole"];

  $technicalParaProfessionalFacultyNonStudents = $_POST["technicalParaProfessionalFacultyNonStudents"];
  $technicalParaProfessionalUndergraduate = $_POST["technicalParaProfessionalUndergraduate"];
  $technicalParaProfessionalGraduate = $_POST["technicalParaProfessionalGraduate"];
  $technicalParaProfessionalPostDoctorate = $_POST["technicalParaProfessionalPostDoctorate"];
  $technicalParaProfessionalComputedTotalByRole = $_POST["technicalParaProfessionalComputedTotalByRole"];

  $administrativeFacultyNonStudents = $_POST["administrativeFacultyNonStudents"];
  $administrativeUndergraduate = $_POST["administrativeUndergraduate"];
  $administrativeGraduate = $_POST["administrativeGraduate"];
  $administrativePostDoctorate = $_POST["administrativePostDoctorate"];
  $administrativeComputedTotalByRole = $_POST["administrativeComputedTotalByRole"];

  $otherFacultyNonStudents = $_POST["otherFacultyNonStudents"];
  $otherUndergraduate = $_POST["otherUndergraduate"];
  $otherGraduate = $_POST["otherGraduate"];
  $otherPostDoctorate = $_POST["otherPostDoctorate"];
  $otherComputedTotalByRole = $_POST["scientistComputedTotalByRole"];

  $computedTotalFacultyNonStudents = $_POST["computedTotalFacultyNonStudents"];
  $computedTotalUndergraduate = $_POST["computedTotalUndergraduate"];
  $computedTotalGraduate = $_POST["computedTotalGraduate"];
  $computedTotalPostDoctorate = $_POST["computedTotalPostDoctorate"];
  $computedTotalByRole = $_POST["computedTotalByRole"];

  $fteVolunteersYouthAdult = $_POST["fteVolunteersYouthAdult"];
  $fteVolunteersYouthTotal = $_POST["fteVolunteersYouthTotal"];

  //set status
  $status = $_SESSION["programInitiationSegment"];

  //variables for query


  //get row
  $updateProgramDataQuery = "UPDATE programs SET scientistFacultyNonStudents = '".$scientistFacultyNonStudents."', scientistUndergraduate = '".$scientistUndergraduate."', scientistGraduate = '".$scientistGraduate."', scientistPostDoctorate = '".$scientistPostDoctorate."', scientistComputedTotalByRole = '".$scientistComputedTotalByRole."', professionalFacultyNonStudents = '".$professionalFacultyNonStudents."', professionalUndergraduate = '".$professionalUndergraduate."', professionalGraduate = '".$professionalGraduate."', professionalPostDoctorate = '".$professionalPostDoctorate."', professionalComputedTotalByRole = '".$professionalComputedTotalByRole."', technicalParaProfessionalFacultyNonStudents = '".$technicalParaProfessionalFacultyNonStudents."', technicalParaProfessionalUndergraduate = '".$technicalParaProfessionalUndergraduate."', technicalParaProfessionalGraduate = '".$technicalParaProfessionalGraduate."', technicalParaProfessionalPostDoctorate = '".$technicalParaProfessionalPostDoctorate."', technicalParaProfessionalComputedTotalByRole = '".$technicalParaProfessionalComputedTotalByRole."', administrativeFacultyNonStudents = '".$administrativeFacultyNonStudents."', administrativeUndergraduate = '".$administrativeUndergraduate."', administrativeGraduate = '".$administrativeGraduate."', administrativePostDoctorate = '".$administrativePostDoctorate."', administrativeComputedTotalByRole = '".$administrativeComputedTotalByRole."', otherFacultyNonStudents = '".$otherFacultyNonStudents."', otherUndergraduate = '".$otherUndergraduate."', scientistGraduate = '".$otherGraduate."', otherPostDoctorate = '".$otherPostDoctorate."', otherComputedTotalByRole = '".$otherComputedTotalByRole."', computedTotalFacultyNonStudents = '".$computedTotalFacultyNonStudents."', computedTotalUndergraduate = '".$computedTotalUndergraduate."', computedTotalGraduate = '".$computedTotalGraduate."', computedTotalPostDoctorate = '".$computedTotalPostDoctorate."', computedTotalByRole = '".$computedTotalByRole."', fteVolunteersYouthAdult = '".$fteVolunteersYouthAdult."', fteVolunteersYouthTotal = '".$fteVolunteersYouthTotal."', status = '".$status."' WHERE user_fk = '".$_SESSION["user_id"]."'";

  //query database
  mysqli_query($conn, $updateProgramDataQuery);

  //redirect to Program Goals page
  header('Location:newprograminitiation-programgoals.php');
  break;
  case 'Goals':
  //echo "Current Segment Title is " . $_SESSION["programInitiationSegment"]."<br>";
  //parse form data as variables for Goals
  $programGoals = $_POST["programGoals"];

  //set status
  $status = $_SESSION["programInitiationSegment"];

  //variables for query

  //updateSegmentStatus($_SESSION["programInitiationSegment"]);
  break;
  case 'Summary':
  echo "Current Segment Title is " . $_SESSION["programInitiationSegment"]."<br>";
  //parse form data as variables for Summary
  updateSegmentStatus($_SESSION["programInitiationSegment"]);
  break;
  case 'Target Audience':
  echo "Current Segment Title is " . $_SESSION["programInitiationSegment"]."<br>";
  //parse form data as variables for Target Audience
  updateSegmentStatus($_SESSION["programInitiationSegment"]);
  break;
  case 'Outcome Measures':
  echo "Current Segment Title is " . $_SESSION["programInitiationSegment"]."<br>";
  //parse form data as variables for Outcome Measures
  updateSegmentStatus($_SESSION["programInitiationSegment"]);
  break;
  case 'Classifications':
  echo "Current Segment Title is " . $_SESSION["programInitiationSegment"]."<br>";
  //parse form data as variables for Classifications
  updateSegmentStatus($_SESSION["programInitiationSegment"]);
  break;
  case 'Submit':
  echo "Current Segment Title is " . $_SESSION["programInitiationSegment"]."<br>";
  //get form variables for Submit
  updateSegmentStatus($_SESSION["programInitiationSegment"]);
  break;
}

//updateSegmentStatus($_SESSION["programInitiationSegment"], $status);
unset($status);

//close database connection
include 'dbclose.php';

?>
