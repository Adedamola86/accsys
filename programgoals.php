<?php
/* This document collects and stores session data from the Program Initiation document */

$_SESSION["programInitiationSegment"] = "Goals";

?>

<h4>Goals</h4>
<div class="row mb-3">
  <div class="col-md-12 order-md-1">
    <form class="needs-validation" action="" method="post" novalidate>      
      <div class="row">
        <div class="col-md-12 mb-3">
          <p class="lead my-4"><strong>What are the major goals of this program? Only a few broad goals are necessary to list. These should relate back to addressing the overall critical short, medium and long term issues of importance in your state that have been listed in your institutional profile.</strong></p>
          <textarea class="form-control" rows="7" id="programGoals" name="programGoals" placeholder="Enter Program Goals..."></textarea>
          <div class="invalid-feedback">
            Please enter valid Program Goals.
          </div>
        </div>
      </div>
      <button onclick="window.history.go(-1); return false;" class="btn btn-primary btn-lg">Previous Screen</button>
      <button formaction="saveprogramdata.php" class="btn btn-primary btn-lg">Save</button>
      <!--<button class="btn btn-primary btn-lg" type="submit">Next and Save</button>-->
    </form>
  </div>
</div>
