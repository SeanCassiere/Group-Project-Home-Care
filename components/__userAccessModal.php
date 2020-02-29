<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panelLogin" role="tab"><i class="fas fa-user mr-1"></i>
              Login as Customer</a>
          </li>
          <li class="nav-item">
            <a class="text-orange nav-link" data-toggle="tab" href="#panelSignUp" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register as Customer</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel Login-->
          <div class="tab-pane fade in show active" id="panelLogin" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">

              <form action="./components/__login.php" method="POST" class="needs-validation-login" id="formLogIn">

                <div class="md-form form-sm mb-5" novalidate>
                  <label for="validationLoginEmail">Email Address</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope prefix"></i></span>
                    </div>
                    <input type="text" class="form-control" id="validationLoginEmail" name="validationLoginEmail" placeholder="eg: john.doe@example.com" aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>

                <div class="md-form form-sm mb-4">
                  <label for="validationLoginPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock prefix"></i></span>
                    </div>
                    <input type="password" class="form-control" id="validationLoginPassword" name="validationLoginPassword" placeholder="eg: *******" aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>
                <div class="text-center mt-2">
                <p id="resultLogIn"></p>
                </div>
                <div class="text-center mt-2">
                  <button class="btn btn-info" type="submit">Log In <i class="fas fa-sign-in ml-1"></i></button>
                </div>

              </form>

            </div>
            <!--Footer-->
            <div class="modal-footer">
            <!--
              <div class="options text-center text-md-right mt-1">
                
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              --->
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel Login-->

          <!--Panel Sign Up-->
          <div class="tab-pane fade" id="panelSignUp" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
            <form action="./components/__sign_up.php" method="POST" id="formSignUp"> <!-- class="needs-validation-signup"  -->
              
              <div class="md-form form-sm mb-5">
                <label for="validationSignUpEmail">Email Address</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope prefix"></i></span>
                  </div>
                  <input type="email" class="form-control" id="validationSignUpEmail" name="validationSignUpEmail" placeholder="eg: john.doe@example.com" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>

              <div class="md-form form-sm mb-5">
                <label for="validationSignUpName">Name</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="validationSignUpName" name="validationSignUpName" placeholder="eg: John Doe" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>

              <div class="md-form form-sm mb-5">
                <label for="validationSignUpPhone">Phone Number</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="validationSignUpPhone" name="validationSignUpPhone" placeholder="eg: 077-341-1909" pattern="\d{3}[\-]\d{3}[\-]\d{4}" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>

              <div class="md-form form-sm mb-5">
                <label for="validationSignUpPassword">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock prefix"></i></span>
                  </div>
                  <input type="password" class="form-control" id="validationSignUpPassword" name="validationSignUpPassword" placeholder="eg: *******" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
              <div class="text-center mt-2">
                <p class='pt-1 bg-light form-result' id='resultSignUp'></p>
              </div>
              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit" id="insertSignUp">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              
              <div class="options text-right">
              <p class='pt-1 bg-light form-result'></p>
              </div>
              
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
            
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->