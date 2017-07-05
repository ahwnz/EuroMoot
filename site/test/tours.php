<?php
  $page_title = "Tours";
  $page_path = "tours";
  include '_above.php';
?>
<div id="tours">
  <div id="tours-header" class="grid-x grid-padding-x">
    <div class="small-4 cell">
      <h2>Tours</h2>
    </div>
    <div class="small-4 cell">
      <select id="tours-sort">
        <option value="" selected>- Sort By -</option>
        <option value="name">Name</option>
        <option value="price">Price</option>
        <option value="fitness">Fitness Level</option>
      </select>
    </div>
  </div>
  <div id="tour-list">
    <div class="tour grid-x grid-padding-x grid-padding-y" data-name="Hot Air Ballooning" data-price="300" data-fitness="2">
      <div class="large-4 cell">
        <h3>Hot Air Ballooning</h3>
      </div>
        <div class="large-3 cell">
          <h3 class="price">Price: $300</h3>
        </div>
        <div class="large-3 cell">
          <h3 class="fitness">Fitness: Low</h3>
        </div>
      </h3>
    </div>
    <div class="tour grid-x grid-padding-x grid-padding-y" data-name="Rafting" data-price="200" data-fitness="3">
      <div class="large-4 cell">
        <h3>Rafting</h3>
      </div>
        <div class="large-3 cell">
          <h3 class="price">Price: $200</h3>
        </div>
        <div class="large-3 cell">
          <h3 class="fitness">Fitness: Moderate</h3>
        </div>
      </h3>
    </div>
    <div class="tour grid-x grid-padding-x grid-padding-y" data-name="Wine Tour" data-price="100" data-fitness="2">
      <div class="large-4 cell">
        <h3>Wine Tour</h3>
      </div>
        <div class="large-3 cell">
          <h3 class="price">Price: $100</h3>
        </div>
        <div class="large-3 cell">
          <h3 class="fitness">Fitness: Low</h3>
        </div>
      </h3>
    </div>
  </div>
</div>
<?php include '_below.php'; ?>
