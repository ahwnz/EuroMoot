<html lang="en-nz">
<?php
  $page_title = "Home";
  include 'head.php';
?>
<body>
  <?php include 'menu.php'; ?>
  <style type="text/css">
    #background-container {
      position: relative;
      width: 100%; height: 100%;
      overflow: hidden;
      background-color: #000;
    }

    img#background {
      position: relative;
      opacity: 0.7;
      margin: 0 auto;
    }

    #quotes {
      position: absolute;
      width: 100%; top: 0;
      text-align: center;
      font-size: 60px;
      font-weight: 400;

      color: white;
    }

    #quotes > div { margin-top: 20px; }

    #quotes > .quote-main {}
    #quotes > .quote-up1, #quotes > .quote-down1 { opacity: 0.5; }
    #quotes > .quote-up2, #quotes > .quote-down2 { opacity: 0.3; }
    #quotes > .quote-up3, #quotes > .quote-down3 { opacity: 0.1; }

    /* Medium Size*/
    @media only screen and (min-width: 940px) and (max-width: 1280px) {
      #quotes { font-size: 50px; }

      img#background {
        margin-top: -100px;
        margin-left: -300px;
      }
    }

    /* Small Sizes */
    @media only screen and (max-width: 940px) {
      #quotes {
        font-size: 40px;
      }

      img#background {
        margin-top: -100px;
        margin-left: -650px;
      }
    }

    /* Extra Small Size */
    @media only screen and (max-width: 720px) {
      #quotes {
        font-size: 36px;
      }
    }

    /* Extra Extra Small Size */
    @media only screen and (max-width: 460px) {
      #quotes {
        font-size: 30px;
      }
    }
  </style>
  <div id="background-container">
    <img id="background" src="/idea3/tug-o-war-the-moot.jpg"/>
    <h1 id="quotes">
      <div class="quote-up3" lang="cs">CO TI BRÁNÍ?</div>
      <div class="quote-up2" lang="da">HVAD STOPPER DIG?</div>
      <div class="quote-up1" lang="de">WAS HÄLT DICH AUF?</div>
      <div class="quote-main" lang="en">WHAT'S STOPPING YOU?</div>
      <div class="quote-down1" lang="es">¿QUE TE DETIENE?</div>
      <div class="quote-down2" lang="fr">QU'EST-CE QUI T'ARRÊTE?</div>
      <div class="quote-down3" lang="it">COSA TI FERMA?</div>
    </h1>
  </div>
</body>
</html>
