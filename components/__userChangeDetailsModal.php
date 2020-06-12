<?php
require('__connect_db.php');
$sql = "SELECT userId, userPassword, userName, userPhone, userEmail FROM users";
$sql .= " WHERE userEmail='".$_SESSION['customer_userEmail']."';";
$result = mysqli_query($con, $sql);
$loggedUser = mysqli_fetch_assoc($result);
?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" id="userDetailsChange" action="./components/__modify_user_details.php" method="POST">
      <div class="modal-header">
        <h5>Change Your Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-danger">Leave the field unchanged IF you don't want to change it.</p>
        <div class="row">
          <div class="col-3 col-form-label">Email:</div>
          <div class="col-9">
            <input class="form-control" type="text" placeholder="<?php echo $_SESSION["customer_userEmail"]; ?>" readonly>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-3 col-form-label">Name:</div>
          <div class="col-9">
            <input class="form-control" type="text" name="newUserName" placeholder="<?php echo $loggedUser["userName"]; ?>">
            <input type="text" name="oldUserName" value="<?php echo $loggedUser["userName"]; ?>" hidden>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-3 col-form-label">Phone Number:</div>
          <div class="col-9">
            <input class="form-control" type="text" name="newUserPhone" placeholder="<?php echo $loggedUser["userPhone"]; ?>" pattern="\d{3}[\-]\d{3}[\-]\d{4}">
            <input type="text" name="oldUserPhone" value="<?php echo $loggedUser["userPhone"]; ?>" hidden>  
          </div>
        </div>
        <div class="row mt-3">
        <div class="col-3 col-form-label">New Password:</div>
          <div class="col-9"><input class="form-control" type="password" name="newUserPassword" placeholder="New Password"></div>
          <div class="col-12"><hr></div>
        </div>
        <div class="row mt-3">
          <div class="col-3 col-form-label">Current Password: <span class="text-danger">*</span></div>
          <div class="col-9"><input class="form-control" type="password" name="oldUserPassword" placeholder="Your current Password" required></div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
          <p class="pt-1 bg-light form-result text-center" style="padding: 1rem;" id="resultUserDetailsChange"></p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </form>
  </div>
</div>
<?php
mysqli_close($con);
?>