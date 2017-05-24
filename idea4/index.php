<!DOCTYPE html>
<html lang="en-nz">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>EuroMoot</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css"/>
  <link rel="stylesheet" href="/idea3/font-awesome-4.7.0/css/font-awesome.css"/>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
  <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

  <style type="text/css">
    @font-face {
      font-family: "Kingthings Foundation";
      src: url('Kingthings_Foundation.ttf');
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background-color: #039;
      font-family: "Helvetica Neue";
    }

    .logo-container {
      width: 400px;
      margin: 20px auto;
    }

    .box-set {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }

    .box {
      border-radius: 5px;
      background-color: rgba(255,255,255, 0.8);
    }

    .linkbox {
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 28px;
      font-family: "Kingthings Foundation";

      background-color: #fc0;
      color: #039;
    }

    .box > .box-title {
      padding: 5px 10px;
      font-size: 28px;
      font-family: "Kingthings Foundation";

      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      background-color: #fc0;
      color: #039;
    }

    .box > .box-title > i.fa, .linkbox > i.fa {
      float: right;
      padding: 7px;
    }

    .box > .box-preview, .box > .box-full {
      padding: 10px;
      font-size: 20px;
    }

    .box:hover, .box:active {
      cursor: pointer;
    }

    .box:hover > .box-title, .linkbox:hover {
      color: steelblue;
    }

    .scout-bar {
      height: 63px;
      margin: 20px auto 0 auto;
      background-color: #6a2c91;
    }

    .scout-bar img {
      float: right;
      width: 200px;
    }

    .euromoot { font-family: "Kingthings Foundation"; }


    /* Response Sizing */

    .box-set {
      width: 1210px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .box {
      width: 350px;
      margin: 20px;
    }

    .scout-bar {
      width: 1130px;
    }


    @media screen and (max-width: 1210px) {
      .box-set { width: 820px; }
      .scout-bar { width: 740px; }
    }

    @media screen and (max-width: 820px) {
      .box-set {
        width: 100%;
        margin: 0; padding: 0;
      }

      .box, .linkbox {
        width: 100%;
        margin: 10px 20px;
      }

      .scout-bar {
        width: 100%;
      }
    }

    @media screen and (max-width: 400px) {
      .logo-container { width: 100%; margin: 0; }
    }
  </style>
</head>
<body>
  <div class="logo-container">
    <img class="logo" src="/logos/euro-logo6-kingthings.png" alt="EuroMoot Logo"/>
  </div>
  <div class="box-set">
    <div class="box preview">
      <div class="box-title">News <i class="fa fa-newspaper-o"></i></div>
      <div class="box-preview">
        Latest news and updates from the MOC.
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">What? <i class="fa fa-question"/></i></div>
      <div class="box-preview">
        A 'moot' is a gathering of Rovers. It is the premier event on the Rover calendar.
        An action packed long weekend, filled to the brim with fun, friends and adventure.
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">When? <i class="fa fa-clock-o"/></i></div>
      <div class="box-preview">
        <span class="euromoot">EUROMOOT</span> will run from 29 March to 2 April 2018.
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">Where? <i class="fa fa-map-marker"/></i></div>
      <div class="box-preview">
        <span class="euromoot">EUROMOOT</span> will be held at Mania-O-Roto (MOR) Scout Park,
        Chalmers Ave, Ashburton, Canterbury, New Zealand.
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">Themes <i class="fa fa-empire"/></i></div>
      <div class="box-preview">
        Each night at Moot we have a party with a fun theme! Dress up with your crew and
        be as creative as possible! Find out what this years themes are here.
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">Tours <i class="fa fa-map-signs"/></i></div>
      <div class="box-preview">
          Check out our range of amazing tours!
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">Merchandise <i class="fa fa-shopping-cart"/></i></div>
      <div class="box-preview">
        Browse our selection of exclusive moot merchandise.
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">Trophies <i class="fa fa-trophy"/></i></div>
      <div class="box-preview">
        A number of trophies are up for grabs.
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">MOC <i class="fa fa-users"/></i></div>
      <div class="box-preview">
        Come meet our wonderful Moot Organising Committee (MOC).
      </div>
    </div>
    <div class="box preview">
      <div class="box-title">Contact Us <i class="fa fa-at"/></i></div>
      <div class="box-preview">
        If you need to contact us for any reason.
      </div>
    </div>
  </div>
  <div class="box-set">
    <a class="linkbox" href="https://www.facebook.com/EuroMoot2018/" target="_blank" title="EuroMoot on Facebook">Facebook <i class="fa fa-facebook"></i></a>
    <a class="linkbox" title="EuroMoot on Snapchat">Snapchat <i class="fa fa-snapchat"></i></a>
    <a class="linkbox" href="https://www.instagram.com/EuroMoot2018/" target="_blank" title="EuroMoot on Instagram">Instagram <i class="fa fa-instagram"></i></a>
  </div>
  <div class="scout-bar">
    <a href="http://www.scouts.org.nz/" target="_blank">
      <img src="/logos/logo-scouts.png" alt="Scouts New Zealand Logo"/>
    <a/>
  </div>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script>

  </script>
</body>
</html>
