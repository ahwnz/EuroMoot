<?php
  $page_title = "Home";
  $page_path = "";
  include '_above.php';
?>
<!--
<div id="news">
  <h2>EuroMoot News</h2>
  <?php /*
    $month_names = ["", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $items = [];

    if ($handle = opendir('./news')) {
      while (false !== ($entry = readdir($handle))) {
          if ($entry != "." && $entry != "..") {
            array_push($items, $entry);
          }
      }
      closedir($handle);
    }

    sort($items);
    foreach($items as $item) {
      $parts = explode(".", $item);
      $name = str_replace("_", " ", $parts[1]);

      $dparts = explode("-", $parts[0]);
      $date = $dparts[2]." ".$month_names[(int) $dparts[1]]." ".$dparts[0];

      echo "<a class='news-link news-header grid-x' href='$prefix/news/$item'>";
      echo "<div class='small-12 medium-6 cell'><h3 class='news-name'>$name</h3></div>";
      echo "<div class='small-12 medium-6 cell'><h3 class='news-date pull-right'>$date</h3></div>";
      echo "</a>";
    }
   */?>
</div>
<script> window.noScroll = true; </script>
-->
<style> #display { display: none;} </style>
<?php include '_below.php'; ?>
