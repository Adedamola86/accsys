<?php

/* This document provides statistics for the user dashboard */

include 'dbconnect.php';
include 'functions.php';

?>

<div class="container-fluid" id="dashstats">
  <div class="row mb-4 d-flex justify-content-between">
    <div class="card col-md-5 mr-auto mb-auto">
      <div class="card-body">
        <p class="display-2 text-right"><?php echo getTotalNumberOfProgramsCompleted($conn); ?> <sub class="h2" style="postion: absolute; bottom: 20px">/  <?php echo getTotalNumberOfProgramsPending($conn); ?></sub></p>
        <h5 class="card-title text-right">Completed / Pending</h5>
        <h6 class="card-subtitle mb-2 text-muted text-right"><a href="#" class="card-link">Create report</a></h6>
        <p class="card-text text-right">Last activity was at <?php echo getTimeCurrentSegmentSaved(); ?></p>
        <p class="card-text text-right"><a href="#" class="card-link">Browse pending list</a>  <a href="#" class="card-link">See completed </a>  <a href="newprograminitiation-coverpage.php" class="card-link">Add new</a></p>
      </div>
    </div>
    <div class="card col-md-3 mx-auto mb-auto">
      <div class="card-body">
        <h5 class="card-title">Program Reports</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Completed Programs: <?php echo "#"; ?><br>Pending Programs: <?php echo "#"; ?></p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    <div class="card col-md-3 ml-auto mb-auto">
      <div class="card-body">
        <h5 class="card-title">Final Report</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Completed Programs: <?php echo "#"; ?><br>Pending Programs: <?php echo "#"; ?></p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>
