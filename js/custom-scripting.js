$(document).ready( function(){
  // Form Sign Up AJAX
  $("#formSignUp").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url,
        data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        $('#resultSignUp').html(data); // show response from the php script.
      }
    });
  });

  // Form Log in AJAX
  $("#formLogIn").submit(function(e){
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url,
        data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        if (data == "Log In Successful, <a href='./index.php' focus>click here to reload.</a>") {
          $('#resultLogIn').html(data); // show response from the php script.
          window.setTimeout(function() { location.reload(true);}, 2000); // Reload the Current Page
        } else {
          $('#resultLogIn').html(data); // show response from the php script.
        }
      }
    });
  });

  
  // Form Maid Search in AJAX
  $("#maidSearchForm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url,
        data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        $('#maidSearchResults').html(data); // show response from the php script.
      }
    });
  });
  //$('#maidSignupSkills').selectpicker('setStyle', 'btn-light', 'remove');

  // Form Maid Log in AJAX
  $("#formMaidLogIn").submit(function(e){
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url,
        data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        if (data == "Log In Successful, <a href='./index.php' focus>click here to reload.</a>") {
          $('#maidLoginResult').html(data); // show response from the php script.
          window.setTimeout(function() { location.reload(true);}, 2000); // Reload the Current Page
        } else {
          $('#maidLoginResult').html(data); // show response from the php script.
        }
      }
    });
  });

  // Form Maid Sign Up AJAX
  $("#formMaidSignUp").submit(function(event) {
    event.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url,
        data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        $('#maidSignupFormResult').html(data); // show response from the php script.
      }
    });
  });

  $("#makeBooking").submit(function(event) {
    event.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url:  url,
        data: form.serialize(),
      success: function(data)
      {
        $("#makeBookingStatus").html(data);
      }
    });
  });


  $('#findSkills').selectpicker('setStyle', 'btn-light', 'remove');
  $('#findLocation').selectpicker('setStyle', 'btn-light', 'remove');
});