<style type="text/css">
  body {
    padding-left: 100px;
  }

  nav#topbar {
    position: fixed;
    display: none;
    top: 0; left: 0; right: 0;
    height: 100px; z-index: 1000;

    background-color: #039;
    color: #FC0;
    box-shadow: 2px 1px 1px #222;
  }

  nav#topBar > a#showMenu, nav#topBar > a#hideMenu {
    display: inline-block;
    float:  right;
    font-size: 32px;
    padding: 39px 16px;
  }

  nav#topBar > a#hideMenu {
    display: none;
  }

  nav#menu {
    position: fixed;
    top: 0; left: 0; bottom: 0;
    width: 100px; z-index: 1000;
    overflow-x: hidden;
    transition: width 1s;

    background-color: #039;
    color: #FC0;
    box-shadow: 2px 1px 1px #222;
  }

  nav#menu:hover {
    width: 400px;
  }

  nav > .nav-inner {
    width: 400px;
    transition: width 0.5s;
  }

  nav#menu ul {
    list-style: none;
    margin: 0;
    padding: 0;

    border-top: 1px solid #017;
  }

  nav#menu ul > li > a {
    display: inline-block;
    width: 100%;
    padding: 15px 0;
    font-size: 18px;

    border-bottom: 1px solid #017;
    color: #FC0;
    text-decoration: none;
  }

  nav#menu ul > li > a:hover {
    background-color: #028;
  }

  nav#menu ul > li i {
    width: 100px;
    text-align: center;
    font-size: 26px;
    margin: -4px 0;
  }

  nav#menu a#scouts-logo {
    display: inline-block;
    width: 100%;
    margin-left: 100px;
    background-color: #6a2c91;
  }


  /* Small Sizes */
  @media only screen and (max-width: 940px) {
    body { padding-left: 0; padding-top: 100px; }

    nav#topbar { display: block; }

    nav#menu, nav#menu:hover { width: 100%; top: 100px; }
    nav#menu > .nav-inner { width: 100%; }
    nav#menu.closed { display: none; }

    nav#menu img.logo {
      display: none;
    }

    nav#menu a#scouts-logo {
      margin-left: 0;
    }
  }

  /* Extra Extra Small Size */
  @media only screen and (max-width: 460px) {
    body { padding-top: 75px; }

    nav#topbar { height: 75px; }
    nav#topbar img.logo, nav#menu img.logo { width: 300px; }

    nav#topBar > a#showMenu, nav#topBar > a#hideMenu { padding: 22px 16px; }

    nav#menu, nav#menu:hover { top: 75px; }

    nav#menu ul > li i {
      width: 50px;
    }
  }

</style>
<nav id="menu" class="closed">
  <div class="nav-inner">
    <a href="/idea3/"><img class="logo" src="/logos/euro-logo2.png" width="400px"/></a>
    <ul>
      <li><a href="/idea3/news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
      <li><a href="/idea3/what.php"><i class="fa fa-question"></i> What? Where? When?</a></li>
      <li><a href="/idea3/themes.php"><i class="fa fa-eur"></i> Theme Nights</a></li>
      <li><a href="/idea3/tours.php"><i class="fa fa-map-signs"></i> Tours</a></li>
      <li><a href="/idea3/merch.php"><i class="fa fa-shopping-cart"></i> Merchandise</a></li>
      <li><a href="/idea3/trophies.php"><i class="fa fa-trophy"></i> Trophies</a></li>
      <li><a href="/idea3/moc.php"><i class="fa fa-users"></i> MOC</a></li>
      <li><a href="/idea3/contact.php"><i class="fa fa-at"></i> Contact Us</a></li>
      <li><a href="https://www.facebook.com/EuroMoot2018/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
    </ul>
    <a id="scouts-logo" href="http://www.scouts.org.nz/" target="_blank"><img src="/logos/logo-scouts.png" width="300px"></a>
  </div>
</nav>
<nav id="topbar">
  <a href="/idea3/"><img class="logo" src="../logos/euro-logo2.png" width="400px"/></a>
  <a id="showMenu"><i class="fa fa-bars"></i></a>
  <a id="hideMenu"><i class="fa fa-times"></i></a>
</nav>
<script>
  $(function() {
    var $navMenu = $("nav#menu");
    var $showMenu = $("a#showMenu").click(function() {
      $showMenu.hide();
      $hideMenu.show();
      $navMenu.removeClass("closed");
    });

    var $hideMenu = $("a#hideMenu").click(function() {
      $hideMenu.hide();
      $showMenu.show();
      $navMenu.addClass("closed");
    });
  });
</script>
