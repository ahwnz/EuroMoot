<?php
  $page_title = "When is Moot?";
  $page_path = "when";
  include '_above.php';
?>
<div id="when">
  <?php
    date_default_timezone_set('Pacific/Auckland');
    $start_date = strtotime("2018-03-29");
    $datediff = $start_date - time() ;
    $days = floor($datediff /(60 * 60 * 24));
  ?>
  <h2>When is Moot?</h2>
  <p>
    <span class="euromoot">EUROMOOT</span> will run over Easter weekend 2018. Starting
    Thursday March 29th and finishing on Monday April 2nd. It's only <?=$days?> days away.
  </p>
  <div class="fb-share-button" data-href="http://euromoot.com<?=$prefix?>/when" data-layout="button"></div>
</div>
<?php include '_below.php'; ?>
