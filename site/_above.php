<?php $prefix = ""; ?>
<!DOCTYPE html>
<html lang="en-nz">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="theme-color" content="#039"/>

  <title>EuroMoot - <?=$page_title?></title>

  <meta property="og:url"           content="http://euromoot.com<?=$prefix?>/<?=$page_path?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="EuroMoot - <?=$page_title?>" />
  <meta property="og:description"   content="The 76th NZ Rover Moot" />
  <meta property="og:image"         content="http://euromoot.com/logos/euromoot-logo(400).png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.0/css/foundation.min.css"/>
  <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.css"/>
  <link rel="stylesheet" href="<?=$prefix?>/output-v4.css"/>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
  <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

  <link rel="icon" sizes="192x192" href="/logos/euromoot-logo(192).png">
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
  <div class="logo-container hide-for-small-only">
    <div id="logo">
      <img src="/logos/euromoot-logo-round(800).png" alt="EuroMoot Logo"/>
    </div>
  </div>
  <div id="background"><img src="/images/euro-lights.jpg"/></div>
  <div class="grid-container">
    <?php include '_menu.php' ?>
    <div class="grid-x grid-padding-x grid-padding-y">
      <div class="small-12 cell">
        <div id="display">
