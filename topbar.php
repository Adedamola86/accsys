<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-4 border-bottom">
  <p class="mt-3">Logged in as: <span class="h5"><strong><?php echo $_SESSION["email"]; ?></strong></span><br>Session Id: <strong><?php echo session_id(); ?></strong><br>User Id: <strong><?php echo $_SESSION["user_id"]; ?></strong><br>Land Grant Area: <strong><?php echo $_SESSION["title"]." (".$_SESSION["landGrantSpecificArea"].", ".$_SESSION["landGrantArea"].")"; ?></strong></p>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary">Share</button>
      <button class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button>
  </div>
</div>
