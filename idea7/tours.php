<?php
  $page_title = "Tours";
  $page_url = "tours";
  include '_above.php';
?>
<div id="tours">
  <h2>Tours</h2>
  <div id="tours-sort">
    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="middle-label" class="text-right middle">Sort By</label>
      </div>
      <div class="small-4 cell">
        <select id="tours-sort">
          <option value="name">Name</option>
          <option value="price">Price</option>
          <option value="fitness">Fitness Level</option>
        </select>
      </div>
    </div>
  </div>
  <div id="tour-list">
    <div class="tour" data-name="Hot Air Ballooning" data-price="300" data-fitness="2">
      <h3>
        Hot Air Ballooning
        <span class="price">$300</span>
        <span class="fitness">Low</span>
      </h3>
    </div>
    <div class="tour" data-name="Rafting" data-price="200" data-fitness="3">
      <h3>
        Rafting
        <span class="price">$200</span>
        <span class="fitness">Moderate</span>
      </h3>
    </div>
    <div class="tour" data-name="Wine Tour" data-price="100" data-fitness="2">
      <h3>
        Wine Tour
        <span class="price">$100</span>
        <span class="fitness">Low</span>
      </h3>
    </div>
  </div>
</div>
<?php include '_below.php'; ?>
