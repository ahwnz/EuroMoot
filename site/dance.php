<?php
  $page_title = "Time to Dance?";
  $page_path = "dance";
  include '_above.php';
?>
<div id="dance" class="dance-background">
  <div class="grid-x grid-padding-x grid-padding-y">
    <div class="small-12 large-6 cell">
      <h2>Time to Dance?</h2>
      <a class="button success" id="dance_start">Start</a>
      <a class="button alert" id="dance_stop">Stop</a>
      <p>Warning: Uses ~5MB</p>
    </div>
  </div>
  <div class="fb-share-button" data-href="http://euromoot.com<?=$prefix?>/dance" data-layout="button"></div>

</div>
<?php include '_below.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rythm.js/2.1.0/rythm.min.js"></script>
<script>
  var rythm = new Rythm();
  rythm.setMusic("cotton-eye-joe.mp3");

  rythm.addRythm('scout-bar', 'color', 0, 10, { from: [0,0,255], to:[255,0,255] })

  var intervalHandle, danceIndex = 0;
  var dances = ['shake', 'jump', 'twist'];

  rythm.addRythm('linkbox', dances[0], 0, 10);

  document.getElementById("dance_start").onclick = function() {
    rythm.start();
    intervalHandle = setInterval(function() {
      rythm.addRythm('linkbox', dances[(++danceIndex)%3], 0, Math.random()*10);
    }, 10000);
  };
  document.getElementById("dance_stop").onclick = function() {
    rythm.stop();
    clearInterval(intervalHandle);
  };
</script>
