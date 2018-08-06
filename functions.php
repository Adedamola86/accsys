<?php
/* This document loads functions called from other documents */

/* This function updates the status of the Program Initiation module */
function getStatus($segmentTitle, $status) {
  if (($segmentTitle == "Cover Page" and $status == "complete") && ($segmentTitle == "Program Support" and $status == "complete") && ($segmentTitle == "Goals" and $status == "complete") && ($segmentTitle == "Summary" and $status == "complete")) {
    if (($segmentTitle == "Target Audience" and $status == "complete") && ($segmentTitle == "Outcome Measures" and $status == "complete") && ($segmentTitle == "Classifications" and $status == "complete") && ($segmentTitle == "Submit" and $status == "complete")) {
      // do something
      $programInitiationProcess = "complete";
    } else { $programInitiationProcess = "pending"; }
  } else { $programInitiationProcess = "incomplete"; }
  echo "Program Initiation Process is " .$programInitiationProcess."<br>";
}

function updateUserDashboardStats() {
  //update user dashboard stats

  //get most recent time program initiation segment was saved

  //get most recently saved program initiation segment

  //get pending program initiations

  //get attempted program initiations

  //get current user session details

}

function updateProgressBar() {
//

}

function loadSegment($segmentName) {
  switch ($segmentName) {
    case 'Cover Page':
      # code...
      $_SESSION["programInitiationSegment"] = "Cover Page";
      $segmentPage = "coverpage.php";
      break;
    case 'Program Support':
      # code...
      $_SESSION["programInitiationSegment"] = "Program Support";
      $segmentPage = "programsupport.php";
      break;
    case 'Goals':
      # code...
      break;
    case 'Summary':
      # code...
      break;
    case 'Target Audience':
      # code...
      break;
    case 'Outcome Measures':
      # code...
      break;
    case 'Classifications':
      # code...
      break;
    case 'Submit':
      # code...
      break;
    default:
      # code...
  }
  return include($segmentPage);
}

function updateSegmentStatus($segmentName) {
//
  switch ($segmentName) {
    case 'Cover Page':
      # code...
      $nextSegmentName = "Program Support";
      $nextSegmentPage = "programsupport.php";
      $_SESSION["programInitiationSegment"] = "Program Support";
      echo "Next session is ".$_SESSION["programInitiationSegment"];
      break;
    case 'Program Support':
      # code...
      $nextSegmentName = "Goals";
      $nextSegmentPage = "";
      $_SESSION["programInitiationSegment"] = "Goals";
      echo "Next session is ".$_SESSION["programInitiationSegment"];
      break;
    case 'Goals':
      # code...
      $nextSegmentName = "Summary";
      $nextSegmentPage = "";
      $_SESSION["programInitiationSegment"] = "Summary";
      echo "Next session is ".$_SESSION["programInitiationSegment"];
      break;
    case 'Summary':
      # code...
      $nextSegmentName = "Target Audience";
      $nextSegmentPage = "";
      $_SESSION["programInitiationSegment"] = "Target Audience";
      echo "Next session is ".$_SESSION["programInitiationSegment"];
      break;
    case 'Target Audience':
      # code...
      $nextSegmentName = "Outcome Measures";
      $nextSegmentPage = "";
      $_SESSION["programInitiationSegment"] = "Outcome Measures";
      echo "Next session is ".$_SESSION["programInitiationSegment"];
      break;
    case 'Outcome Measures':
      # code...
      $nextSegmentName = "Classifications";
      $nextSegmentPage = "";
      $_SESSION["programInitiationSegment"] = "Classifications";
      echo "Next session is ".$_SESSION["programInitiationSegment"];
      break;
    case 'Classifications':
      # code...
      $nextSegmentName = "Submit";
      $nextSegmentPage = "";
      $_SESSION["programInitiationSegment"] = "Submit";
      echo "Next session is ".$_SESSION["programInitiationSegment"];
      break;
    case 'Submit':
      # code...
      $_SESSION["programInitiationSegment"] = "Complete";
      echo "This session is ".$_SESSION["programInitiationSegment"];
      break;
    }
    return $_SESSION["programInitiationSegment"];
}

function getTimeCurrentSegmentSaved() {
  //this indicates the time of the 'Save' event
  //$_SESSION["timeCurrentSegmentSaved"] = $currentTime = strftime("%a, %B %d, %Y @ %X %Z");
  $h = "5";
  $hm = $h * 60;
  $ms = $hm * 60;
  $_SESSION["timeCurrentSegmentSaved"] = $currentTime = gmdate("D, d M Y H:i:s A", time()-($ms));
  echo $_SESSION["timeCurrentSegmentSaved"]."<br>";
}

function getTotalNumberOfProgramsAttempted($conn) {
  //search database for total number of program entries
  $getTotalAttemptedProgramsQuery = "SELECT * FROM `programs`";
  $resultGetTotalAttemptedProgramsQuery = mysqli_query($conn, $getTotalAttemptedProgramsQuery);
  $numberOfProgramsAttempted = mysqli_num_rows($resultGetTotalAttemptedProgramsQuery);
  echo $numberOfProgramsAttempted;
}

function getTotalNumberOfProgramsCompleted($conn) {
  //search database for total number of program entries with status "complete"
  $getTotalCompletedProgramsQuery = "SELECT * FROM `programs` WHERE `status` = 'complete'";
  $resultGetTotalCompletedProgramsQuery = mysqli_query($conn, $getTotalCompletedProgramsQuery);
  $numberOfProgramsCompleted = mysqli_num_rows($resultGetTotalCompletedProgramsQuery);
  echo $numberOfProgramsCompleted;
}

function getTotalNumberOfProgramsPending($conn) {
  //search database for total number of program entries with status "pending"
  $getTotalPendingProgramsQuery = "SELECT * FROM `programs` WHERE `status` = 'pending'";
  $resultGetTotalPendingProgramsQuery = mysqli_query($conn, $getTotalPendingProgramsQuery);
  $numberOfProgramsPending = mysqli_num_rows($resultGetTotalPendingProgramsQuery);
  //$numberOfProgramsPending = 0;
  echo $numberOfProgramsPending;
}

?>
