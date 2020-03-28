<div id="findAMaid" class="bodySection">
  <div class="jumbotron" style="min-height: 400px;">    
    <h2>Let's find you a Maid</h2>
    <br>
    <form id="maidSearchForm" action="./components/__maidSearcher.php" method="POST">
      <div class="form-row">
        <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-3 offset-lg-1">
          <label for="findLocation">Where do you live?</label>
          <select id="findLocation" class="form-control selectpicker" data-style="btn-light" name="findLocation" required>
            <option value="Wellawatta">Wellawatta</option>
            <option value="Hatton">Hatton</option>
            <option value="Kandy">Kandy</option>
            <option value="Dehiwala">Dehiwala</option>
            <option value="Moratuwa">Moratuwa</option>
            <option value="Panadura">Panadura</option>
            <option value="Kotahena">Kotahena</option>
          </select>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-7">
          <label for="findSkills">What tasks do you need done?</label>
          <select id="findSkills" class="form-control selectpicker" name="findSkills[]" data-style="btn-light" multiple required>
            <option value="cooking">Cooking</option>
            <option value="cleaning">Cleaning</option>
            <option value="washing">Washing</option>
            <option value="daycare">Day Care</option>
            <option value="gardening">Gardening</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-2 offset-lg-1">
          <label for="startDate">Pick Start Date</label>
          <input type="text" id="startingDate" name="startDate" class="form-control" required>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-2">
          <label for="startDate">Pick End Date</label>
          <input type="text" id="endingDate" name="endingDate" class="form-control">
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-4">
          <label for="amountRange">Maximum Price (per day): <code>LKR</code> Rs. <input type="text" name="amountInput" min="500" max="3000" value="1200" style="background-color: transparent; border: none;" readonly></label>
          <input type="range" min="500" max="3000" step="50" value="1200" name="amountRange" id="amountRange" class="custom-range" oninput="this.form.amountInput.value=this.value">
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-2">
          <label class="d-none d-xs-none d-sm-none d-md-block d-lg-block d-xl-block">Hit <code>Search</code> Button</label>
          <button class="btn btn-primary form-control" type="submit">Search</button>
        </div>
      </div>
    </form>
    <div id="maidSearchResults" class="row">
    </div>
  </div>
</div>
<script>
  $('#startingDate').datepicker({
    dateFormat: 'yy-mm-dd'
  });
  $('#endingDate').datepicker({
    dateFormat: 'yy-mm-dd'
  });
</script>