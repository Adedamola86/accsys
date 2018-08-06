<?php
/* This document collects and stores session data from the Program Initiation document */

$_SESSION["programInitiationSegment"] = "Cover Page";

?>

<h4>Cover Page</h4>
<div class="row mb-3">
  <div class="col-md-12 order-md-1">
    <form class="needs-validation" action="" method="post" novalidate>
      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control" id="programTitle" name="programTitle" placeholder="Program Title" value="" required>
          <div class="invalid-feedback">
            Program Title is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" class="form-control" id="contactPerson" name="contactPerson" placeholder="Primary Point of Contact for Program" value="" required>
          <div class="invalid-feedback">
            Valid Primary point of contact is required.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <select class="custom-select d-block w-100" style="font-size: 1rem" id="fundingSource" name="fundingSource" required>
            <option value="">Choose Funding Source...</option>
            <option value="1890 Extension">1890 Extension</option>
            <option value="Evans-Allen">Evans-Allen</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid Funding Source.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start date (mm/dd/yyyy)">
          <div class="invalid-feedback" required>
            Please select a valid start date.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End date (mm/dd/yyyy)">
          <div class="invalid-feedback" required>
            Please select a valid end date.
          </div>
        </div>
      </div>
      <button onclick="window.history.go(-1); return false;" class="btn btn-primary btn-lg">Previous Screen</button>
      <button formaction="saveprogramdata.php" class="btn btn-primary btn-lg">Save</button>
      <!--<button class="btn btn-primary btn-lg" type="submit">Next and Save</button>-->
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModalCenter">Modal Example</button>
    </form>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Save and Exit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Kindly confirm the input data filled in the previous page is correct then click next else click cancle to review on the previous page.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Stay on current page</button>
        <button type="button" class="btn btn-primary" action="postToDb.php">Save changes</button>
      </div>
    </div>
  </div>
</div>
