<div id="findAMaid" class="bodySection">
  <div class="jumbotron" style="min-height: 300px;">    
    <h2>Find a Maid</h2>
    <form id="maidSearchForm" action="./components/__maidSearcher.php" method="POST">
      <div class="form-row">
        <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
            <option value="Cooking"> Cooking</option>
            <option value="Cleaning"> Cleaning</option>
            <option value="Mopping"> Mopping</option>
            <option value="Gardening"> Gardening</option>
          </select>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <label for="name2">Name 3</label>
          <input type="text" class="form-control align-bottom" placeholder="Name 3" id="name3" style="border: none">
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </div>
    </form>
    <div id="maidSearchResults" class="row">
    </div>
  </div>
</div>