<?php
  if(isset($_REQUEST['successMessage'])) {
?>
    <div class="alert alert-success" role="alert">
        Data recorded successfully.
    </div>
<?php
  }
?>


<?php
  if(isset($_REQUEST['errorMessage'])) {
?>
    <div class="alert alert-danger" role="alert">
        Something went wrong!
    </div>
<?php
  }
?>
