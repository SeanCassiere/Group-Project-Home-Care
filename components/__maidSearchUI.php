<div id="findAMaid" class="bodySection">
  <div class="jumbotron" style="min-height: 400px;">    
    <h2>Find a Maid</h2>
    <br>
    <form id="maidSearchForm" action="./components/__maidSearcher.php" method="POST">
      <div class="form-row">
        <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4 offset-lg-1">
          <label for="findLocation">Where do you live?</label>
          <select id="findLocation" class="form-control selectpicker" data-style="btn-light">
            <option value="" disabled selected>Choose</option>
            <option value="Malabe"> Malabe</option>
            <option value="Colombo"> Colombo</option>
            <option value="Kotahena"> Kotahena</option>
            <option value="Wellawatta"> Wellawatta</option>
          </select>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <label for="findSkills">Skills</label>
          <select id="findSkills" class="form-control selectpicker" name="findSkills" data-style="btn-light" multiple>
            <option value="cooking">Cooking</option>
            <option value="cleaning">Cleaning</option>
            <option value="washing">Washing</option>
            <option value="daycare">Day Care</option>
            <option value="gardening">Gardening</option>
          </select>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
          <label class="d-none d-xs-none d-sm-none d-md-block d-lg-block d-xl-block">Hit the <code>Search</code> button!</label>
          <button class="btn btn-primary form-control" type="submit">Search</button>
        </div>
      </div>
    </form>
    <div id="maidSearchResults" class="row">
    </div>
  </div>
</div>