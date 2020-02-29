<?php
require_once('./components/__connect_db.php');
$userDetailSQL = "SELECT userId, userPassword, userName, userPhone, userEmail FROM users WHERE userEmail='".$_SESSION["customer_userEmail"]."';";
$userDetailQueryReturn = mysqli_query($con, $userDetailSQL);
$loggedUser = mysqli_fetch_assoc($userDetailQueryReturn);
?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-3 col-form-label">Email:</div>
          <div class="col-9"><input class="form-control" type="text" placeholder="<?php echo $_SESSION["customer_userEmail"]; ?>" readonly></div>
        </div>
        <div class="row mt-3">
          <div class="col-3 col-form-label">Name:</div>
          <div class="col-9"><input class="form-control" type="text" name="newUserName" placeholder="<?php echo $loggedUser["userName"]; ?>"></div>
        </div>
        <div class="row mt-3">
          <div class="col-3 col-form-label">Phone Number:</div>
          <div class="col-9"><input class="form-control" type="text" name="newUserPhone" placeholder="<?php echo $loggedUser["userPhone"]; ?>" pattern="\d{3}[\-]\d{3}[\-]\d{4}"></div>
        </div>
        <div class="row">
          <div class="col-12"><hr>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>
<?php
mysqli_close($con);
?>