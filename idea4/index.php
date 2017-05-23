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
      src: url('Kingthings_Foundation.tff');
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


    .boxes {
      width: 1210px;
      margin: 0 auto;
      padding: 0 20px;

      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }

    .box {
      width: 350px;

      margin: 20px;
      border-radius: 5px;
      background-color: rgba(255,255,255, 0.8);
    }

    .linkbox {
      width: 350px;
      margin: 20px;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 28px;
      font-family: "Kingthings Foundation";

      background-color: #fc0;
      color: #039;
    }

    .box > .title {
      padding: 5px 10px;
      font-size: 28px;
      font-family: "Kingthings Foundation";

      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      background-color: #fc0;
      color: #039;
    }

    .box > .title > i.fa, .linkbox > i.fa {
      float: right;
      padding: 7px;
    }

    .box > .preview {
      padding: 10px;

      font-size: 20px;
    }

    .box:hover {
      cursor: pointer;
    }

    .box:hover > .title, .linkbox:hover {
      color: steelblue;
    }

    .scout-bar {
      background-color: #6a2c91;
      width: 1130px; height: 63px;
      margin: 20px auto 0 auto;
    }

    .scout-bar > img {
      float: right;
      width: 200px;
    }

    .euromoot {
      font-family: "Kingthings Foundation";
    }

    @media screen and (max-width: 1210px) {
      .boxes { width: 820px; }
      .scout-bar { width: 740px; }
    }

    @media screen and (max-width: 820px) {
      .boxes, .scout-bar, .box, .linkbox {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="logo-container">
    <img class="logo" src="/logos/euro-logo6-kingthings.svg"/>
  </div>
  <div class="boxes">
    <div class="box">
      <div class="title">News <i class="fa fa-newspaper-o"></i></div>
      <div class="preview">
        Latest news and updates from the MOC.
      </div>
    </div>
    <div class="box">
      <div class="title">What? <i class="fa fa-question"/></i></div>
      <div class="preview">
        A 'moot' is a gathering of Rovers. It is the premier event on the Rover calendar.
        An action packed long weekend, filled to the brim with fun, friends and adventure.
      </div>
    </div>
    <div class="box">
      <div class="title">When? <i class="fa fa-clock-o"/></i></div>
      <div class="preview">
        <span class="euromoot">EUROMOOT</span> will run from 29 March to 2 April 2018.
      </div>
    </div>
    <div class="box">
      <div class="title">Where? <i class="fa fa-map-marker"/></i></div>
      <div class="preview">
        <span class="euromoot">EUROMOOT</span> will be held at Mania-O-Roto (MOR) Scout Park,
        Chalmers Ave, Ashburton, Canterbury, New Zealand.
      </div>
    </div>
    <div class="box">
      <div class="title">Themes <i class="fa fa-empire"/></i></div>
      <div class="preview">
        Each night at Moot we have a party with a fun theme! Dress up with your crew and
        be as creative as possible! Find out what this years themes are here.
      </div>
    </div>
    <div class="box">
      <div class="title">Tours <i class="fa fa-map-signs"/></i></div>
      <div class="preview">
          Check out our range of amazing tours!
      </div>
    </div>
    <div class="box">
      <div class="title">Merchandise <i class="fa fa-shopping-cart"/></i></div>
      <div class="preview">
        Browse our selection of exclusive moot merchandise.
      </div>
    </div>
    <div class="box">
      <div class="title">Trophies <i class="fa fa-trophy"/></i></div>
      <div class="preview">
        A number of trophies are up for grabs.
      </div>
    </div>
    <div class="box">
      <div class="title">MOC <i class="fa fa-users"/></i></div>
      <div class="preview">
        Come meet our wonderful MOC.
      </div>
    </div>
    <div class="box">
      <div class="title">Contact Us <i class="fa fa-at"/></i></div>
      <div class="preview">
        If you need to contact us for any reason.
      </div>
    </div>
  </div>
  <div class="boxes">
    <a class="linkbox">Facebook <i class="fa fa-facebook"></i></a>
    <a class="linkbox">Snapchat <i class="fa fa-snapchat"></i></a>
    <a class="linkbox">Instagram <i class="fa fa-instagram"></i></a>
  </div>
  <div class="scout-bar">
    <img src="/logos/logo-scouts.png"/>
  </div>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script>

  </script>
</body>
</html>
