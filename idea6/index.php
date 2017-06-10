<!DOCTYPE html>
<html lang="en-nz">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>EuroMoot</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css"/>
  <link rel="stylesheet" href="/idea3/font-awesome-4.7.0/css/font-awesome.css"/>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>


</head>
<body>
  <style>
    #image-container {
      position: relative;
      width: 100%; height: 100%;
      overflow:hidden;
      background-color: #000;
    }

    #image-container > img {
      opacity: 0.7;
    }

    #image-overlay {
      position: absolute;
      top: 0; width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }

    img#logo {
      margin: 20px;
    }

    #quotes {
      font-size: 60px;
      font-weight: 400;
      color: white;
    }

    #quotes > div { display: none; }

    a#more-info {
      display: inline-block;
      padding: 20px;
      color: white;
      font-size: 26px;
    }
  </style>

  <div id="container">
    <div id="image-container">
      <img id="background" src="/idea3/tug-o-war-the-moot.jpg"/>
      <div id="image-overlay">
        <img id="logo" src="/logos/euro-logo6-round.png" width="300"/>
        <h1 id="quotes">
          <div lang="cs">CO TI BRÁNÍ?</div>
          <div lang="da">HVAD STOPPER DIG?</div>
          <div lang="de">WAS HÄLT DICH AUF?</div>
          <div lang="es">¿QUE TE DETIENE?</div>
          <div lang="fr">QU'EST-CE QUI T'ARRÊTE?</div>
          <div lang="it">COSA TI FERMA?</div>
          <div lang="en">WHAT'S STOPPING YOU?</div>
        </h1>
        <a id="more-info"><i class="fa fa-chevron-down"></i><a/>
      </div>
    </div>
    <div class="sections">
      <div></div>
    </div>

  </div>
  <script>
    $(function() {
      $("#image-container, #image-overlay").height($(window).height());

      var selectedQuote = 0;

      $("#quotes > div:nth("+selectedQuote+")").fadeIn(1000);

      var intervalId = setInterval(function() {
        $("#quotes > div:nth("+selectedQuote+")").fadeOut(1000);
        selectedQuote++;
        if(6 == selectedQuote) clearInterval(intervalId);
        setTimeout(function() {
          $("#quotes > div:nth("+selectedQuote+")").fadeIn(1000);
        }, 1000);
      }, 4000);

      $("a#more-info").click(function() {
        $(document).scrollTop($(window).height());
      });
    });
  </script>
</body>
