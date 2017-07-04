<?php
  $page_title = "The Theme";
  $page_path = "theme";
  include '_above.php';
?>
<div id="theme">
  <h2>The Theme</h2>
  <p>
    The overall theme of the NZ Rover Moot 2018 is <span class="euromoot">EUROMOOT</span>.
    Join us as we celebrate all things European.
  </p>
  <div class="grid-x grid-padding-x grid-padding-y">
    <div class="small-12 large-6 cell">
      <h3>Friday Night</h3>
    </div>
    <div class="small-12 large-6 cell">
      <img src="/images/oktoberfest.jpg"/>
    </div>
    <div class="small-12 large-6 cell">
      <h3>Saturday Night</h3>
    </div>
    <div class="small-12 large-6 cell">
      <img src="/images/eurovision.jpg"/>
    </div>
  </div>
  <div class="fb-share-button" data-href="http://euromoot.com<?=$prefix?>/theme" data-layout="button"></div>
</div>
<?php include '_below.php'; ?>
