<!DOCTYPE html>
<html lang="en-nz">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>EuroMoot - <?=$page_title?></title>

  <meta property="og:url"           content="http://euromoot.com/idea7/<?=$page_path?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="EuroMoot - <?=$page_title?>" />
  <meta property="og:description"   content="The 76th NZ Rover Moot" />
  <meta property="og:image"         content="http://euromoot.com/logos/euro-logo6.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.0/css/foundation.min.css"/>
  <link rel="stylesheet" href="/idea3/font-awesome-4.7.0/css/font-awesome.css"/>
  <link rel="stylesheet" href="/idea7/output-v1.css"/>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
  <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
</head>
<body>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));
  </script>
  <div class="logo-container">
    <div id="logo">
      <img src="/logos/euro-logo6-round.png" alt="EuroMoot Logo"/>
    </div>
  </div>
  <div id="background"><img src="/idea4/euro-lights.jpg"/></div>
  <div class="grid-container">
    <?php include '_menu.php' ?>
    <div class="grid-x grid-padding-x grid-padding-y">
      <div class="small-12 cell">
