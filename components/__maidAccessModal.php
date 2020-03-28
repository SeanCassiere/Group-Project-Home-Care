<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLMaidRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panelMaidLogin" role="tab"><i class="fas fa-user mr-1"></i>
              Login as Maid</a>
          </li>
          <li class="nav-item">
            <a class="text-orange nav-link" data-toggle="tab" href="#panelMaidSignUp" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register as Maid</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel Login-->
          <div class="tab-pane fade in show active" id="panelMaidLogin" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">

              <form action="./components/__maid_login.php" method="POST" class="needs-validation-login" id="formMaidLogIn">

                <div class="md-form form-sm mb-5" novalidate>
                  <label for="maidLoginEmail">Email Address</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope prefix"></i></span>
                    </div>
                    <input type="text" class="form-control" id="maidLoginEmail" name="maidLoginEmail" placeholder="eg: maid.doe@example.com" aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>

                <div class="md-form form-sm mb-4">
                  <label for="maidLoginPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock prefix"></i></span>
                    </div>
                    <input type="password" class="form-control" id="maidLoginPassword" name="maidLoginPassword" placeholder="eg: *******" aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>
                <div class="text-center mt-2">
                <p id="maidLoginResult"></p>
                </div>
                <div class="text-center mt-2">
                  <button class="btn btn-info" type="submit">Log In <i class="fas fa-sign-in ml-1"></i></button>
                </div>

              </form>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel Login-->

          <!--Panel Sign Up-->
          <div class="tab-pane fade" id="panelMaidSignUp" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
            <form action="./components/__maid_sign_up.php" method="POST" id="formMaidSignUp" name="formMaidSignUp"> <!-- class="needs-validation-signup"  -->
              
              <div class="md-form form-sm mb-5">
                <label for="maidSignupName">Name</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="maidSignupName" name="maidSignupName" placeholder="eg: John Doe" aria-describedby="inputGroupPrepend" required>
                </div>
                <br> <!-- line break -->
                <label for="maidSignupNIC">National Identification Number (NIC)/Passport Number</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="maidSignupNIC" name="maidSignupNIC" placeholder="eg: 981651798v" aria-describedby="inputGroupPrepend" required>
                </div>
                <br> <!-- line break -->
                <label for="maidAddress">Where do you live?</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <select id="maidAddress" class="form-control selectpicker" name="maidAddress" data-style="btn-light" aria-describedby="inputGroupPrepend">
                    <option value="Wellawatta">Wellawatta</option>
                    <option value="Kandy">Nugegoda</option>
                    <option value="Dehiwala">Dehiwala</option>
                    <option value="Panadura">Battaramulla</option>
                    <option value="Kotahena">Kotahena</option>
                  </select>
                </div>
                <br> <!-- line break -->
                <label for="maidSignupPhone">Phone Number</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="maidSignupPhone" name="maidSignupPhone" placeholder="eg: 077-341-1909" pattern="\d{3}[\-]\d{3}[\-]\d{4}" aria-describedby="inputGroupPrepend" required>
                </div>
                <br> <!-- line break -->
                <label for="maidSignupSkills">Skills</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <select id="maidSignupSkills" class="form-control selectpicker" name="maidSignupSkills[]" data-style="btn-light" multiple aria-describedby="inputGroupPrepend">
                    <option value="cooking">Cooking</option>
                    <option value="cleaning">Cleaning</option>
                    <option value="washing">Washing Clothes</option>
                    <option value="gardening">Gardening</option>
                    <option value="daycare">Child Daycare</option>
                  </select>
                </div>
                <br> <!-- line break -->
                <label for="maidSignupOtherSkills">Other Skills? (Please separate with a comma '<code>,</code>')</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="maidSignupOtherSkills" name="maidSignupOtherSkills" placeholder="eg: Stitching, Repair Work, etc." aria-describedby="inputGroupPrepend">
                </div>
                <br> <!-- line break -->
                <label for="maidPartFullTime">Are you a Part-Time or Full-Time Maid?</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <select id="maidPartFullTime" class="form-control selectpicker" name="maidPartFullTime" data-style="btn-light" aria-describedby="inputGroupPrepend">
                    <option value="pt">Part-Time</option>
                    <option value="ft">Full-Time</option>
                  </select>
                </div>
                <br> <!-- line break -->
                <label for="maidSignupEmail">Email Address</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope prefix"></i></span>
                  </div>
                  <input type="email" class="form-control" id="maidSignupEmail" name="maidSignupEmail" placeholder="eg: maid.doe@example.com" aria-describedby="inputGroupPrepend" required>
                </div>
                <br> <!-- line break -->
                <label for="maidSignupPassword">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock prefix"></i></span>
                  </div>
                  <input type="password" class="form-control" id="maidSignupPassword" name="maidSignupPassword" placeholder="eg: *******" aria-describedby="inputGroupPrepend" required>
                </div>
                <br> <!-- line break -->
                
              </div>
              <div class="text-center mt-2">
              <p id="maidSignupFormResult" class="pt-1 bg-light form-result"></p>
              </div>
              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit" id="maidSignup">Sign up <i class="fas fa-sign-in ml-1"></i></button>
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