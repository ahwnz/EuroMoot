<?php
  if(isset($_GET['logo'])) {
    $logo = $_GET['logo'];
  } else {
    $logo = "logo6-round";
  }

  date_default_timezone_set('Pacific/Auckland');
  $start_date = strtotime("2018-03-29");
  $datediff = $start_date - time() ;
  $days = floor($datediff /(60 * 60 * 24));


?>
<!DOCTYPE html>
<html lang="en-nz">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta property="og:url"           content="http://euromoot.com/idea4/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="EuroMoot" />
  <meta property="og:description"   content="The 76th NZ Rover Moot" />
  <meta property="og:image"         content="http://euromoot.com/logos/euro-logo6-round.png" />

  <title>EuroMoot</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css"/>
  <link rel="stylesheet" href="/idea3/font-awesome-4.7.0/css/font-awesome.css"/>
  <link rel="stylesheet" href="/idea4/output-v3.css"/>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
  <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="logo-container">
    <div id="logo">
      <img src="/logos/euro-<?=$logo?>.png" alt="EuroMoot Logo"/>
    </div>
  </div>
  <div id="background"><img src="/idea4/euro-lights.jpg"/></div>
  <div class="box-set">
    <div class="box preview" id="news" title="News">
      <h2 class="box-title">News
        <span class="icon box-icon"><i class="fa fa-newspaper-o"></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        Latest news and updates from the MOC.
      </div>
      <div class="box-full">
        <div class="news-item">
          <h3>
            Moot Website Released
            <span class="news-date">23 June 2017</span>
          </h3>
          <p>
            The EuroMoot website is released to the public.
          </p>
        </div>
        <div class="news-item">
          <h3>
            Moot Logo Released
            <span class="news-date">10 June 2017</span>
          </h3>
          <p>
            The official EuroMoot Logo is released at Australian Mudbash.
          </p>
        </div>
      </div>
    </div>
    <div class="box preview" id="what" title="What is Moot?">
      <h2 class="box-title">What is Moot?
        <span class="icon box-icon"><i class="fa fa-question"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        A 'moot' is a gathering of Rovers. It is the premier event on the Rover calendar.
        An action packed long weekend, filled to the brim with fun, friends and adventure.
      </div>
      <div class="box-full">
        <p>
          A 'moot' is a gathering of Rovers. The term was first coined by Lord Robert
          Baden-Powell, in a letter to Percy Bantock Nevill who organised the first moot,
          held in London back in 1926. The word ‘moot’ is an Old English word meaning
          assembly or gathering.
        </p>
        <p>The National Moot is the Rover sections premier event, held annually over Easter
          weekend, each event is situated in a different part of the country. The programme
          is organised around the three tenets of rovering: service, social and
          self-development. So you can expect moot to be an action-packed, fun-filled
          adventure. Typical activities include:
        </p>
        <ul>
          <li>Service project - take part in an amazing community project.</li>
          <li>
            Tour day - spend the day off-site on one of a number of adventurous tours
            with which to challenge yourself; or take it easy and spend the day on a relaxing
            tour instead.
          </li>
          <li>
            Costume parties - Each night there is a themed costume party with live bands,
            DJs or other entertainment.
          </li>
          <li>
            Shooting Trophy - Spend the afternoon at different bases, completing interesting
            challenges and fun games, as you compete for the prestigious Shooting Trophy.
          </li>
          <li>
            Sporting events - Compete in some sporting events including a cross-country and a
            tug-o war.
          </li>
        </ul>
        <p>
          Moot is also an opportunity to reward Rovers for their yearlong contribution to Rovers,
          Scouting in general and the community. Often those who have excelled throughout the year
          will be recognised in front of their peers, and it is a wonderful opportunity to come
          together for everyone.
        </p>
        <p>
          Who is eligible? Any Full Rover, Associate or Squire in a NZ Rover Crew, as well as
          Young Leaders under 26 in both Scouting and Guiding. We also welcome international
          participants, as Rovers or Young Leaders (under 26) in their home association.
        </p>
        <div class="fb-share-button" data-href="http://euromoot.com/idea4/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Feuromoot.com%2Fidea4%2F&amp;src=sdkpreparse">Share</a></div>
      </div>
    </div>
    <div class="box preview" id="when" title="When is Moot?">
      <h2 class="box-title">When is Moot?
        <span class="icon box-icon"><i class="fa fa-clock-o"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        <span class="euromoot">EUROMOOT</span> is starting in <?=$days?> days.
      </div>
      <div class="box-full">
        <p>
          <span class="euromoot">EUROMOOT</span> will run over Easter weekend 2018. Starting
          Thursday March 29th and finishing on Monday April 2nd. It's only <?=$days?> days away.
        </p>
      </div>
    </div>
    <div class="box preview" id="where" title="Where is Moot?">
      <h2 class="box-title">Where is Moot?
        <span class="icon box-icon"><i class="fa fa-map-marker"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        <span class="euromoot">EUROMOOT</span> will be held at Mania-O-Roto (MOR) Scout Park, Ashburton, New Zealand.
      </div>
      <div class="box-full">
        <div class="row">
          <div class="small-12 large-6 columns">
            <span class="euromoot">EUROMOOT</span> will be held at Mania-O-Roto (MOR) Scout Park, Ashburton, New Zealand.
          </div>
          <div class="small-12 large-6 columns">
            <img src="/images/mor-logo.jpg" style="display: block; width: 211px; margin: 0 auto;"/>
          </div>
        </div>
        <div class="row">
          <div class="small-12 large-6 columns">
            <iframe width="100%" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAa_YBNUFg7tSi6UeYipv8is4PI2fkNmAM&q=Mania-O-Roto+Scout+Park&zoom=8" allowfullscreen></iframe>
            </div>
          <div class="small-12 large-6 columns">
            <img src="/images/mor-park1.jpg"/>
          </div>
        </div>
        <div class="row">
          <div class="small-12 large-6 columns">
            <img src="/images/mor-park2.jpg"/>
          </div>
          <div class="small-12 large-6 columns">
            <img src="/images/mor-park4.jpg"/>
          </div>
        </div>
      </div>
    </div>
    <div class="box preview" id="theme" title="The Theme">
      <h2 class="box-title">The Theme
        <span class="icon box-icon"><i class="fa fa-empire"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        The theme of Moot 2018 is <span class="euromoot">EUROMOOT</span>. Join us as
        we celebrate all things European.

      </div>
      <div class="box-full">
        <p>
          The overall theme of the NZ Rover Moot 2018 is <span class="euromoot">EUROMOOT</span>.
          Join us as we celebrate all things European.
        </p>
        <div class="row">
          <div class="small-12 large-6 columns">
            <h3>Friday Night</h3>
          </div>
          <div class="small-12 large-6 columns">
            <img src="/images/oktoberfest.jpg"/>
          </div>
        </div>
        <div class="row">
          <div class="small-12 large-6 columns">
            <h3>Saturday Night</h3>
          </div>
          <div class="small-12 large-6 columns">
            <img src="/images/eurovision.jpg"/>
          </div>
        </div>
      </div>
    </div>
    <div class="box preview" id="tours" title="Tours">
      <h2 class="box-title">Tours
        <span class="icon box-icon"><i class="fa fa-map-signs"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
          Check out our range of amazing tours!
      </div>
      <div class="box-full">
        <div id="tours-sort">
          <div class="row">
            <div class="small-12 large-6 large-offset-3 columns">
              <div class="row">
                <div class="small-3 columns">
                  <label for="middle-label" class="text-right middle">Sort By</label>
                </div>
                <div class="small-9 columns">
                  <select id="tours-sort">
                    <option value="name">Name</option>
                    <option value="price">Price</option>
                    <option value="fitness">Fitness Level</option>
                  </select>
                </div>
              </div>
              </div>
            </div>
          </div>
        <div id="tour-list">
          <div class="tour" data-name="Hot Air Ballooning" data-price="300" data-fitness="2">
            <h3>
              Hot Air Ballooning
              <span class="price">$300</span>
              <span class="fitness">Low</span>
            </h3>
          </div>
          <div class="tour" data-name="Rafting" data-price="200" data-fitness="3">
            <h3>
              Rafting
              <span class="price">$200</span>
              <span class="fitness">Moderate</span>
            </h3>
          </div>
          <div class="tour" data-name="Wine Tour" data-price="100" data-fitness="2">
            <h3>
              Wine Tour
              <span class="price">$100</span>
              <span class="fitness">Low</span>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="box preview" id="merchandise" title="Merchandise">
      <h2 class="box-title">Merchandise
        <span class="icon box-icon"><i class="fa fa-shopping-cart"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        Browse our selection of exclusive moot merchandise.
      </div>
      <div class="box-full">Merchandise</div>
    </div>
    <div class="box preview" id="trophies" title="Trophies">
      <h2 class="box-title">Trophies
        <span class="icon box-icon"><i class="fa fa-trophy"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        A number of trophies are up for grabs.
      </div>
      <div class="box-full">Trophies</div>
    </div>
    <div class="box preview" id="moc" title="Organising Committee">
      <h2 class="box-title">MOC
        <span class="icon box-icon"><i class="fa fa-users"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        Come meet our wonderful Moot Organising Committee (MOC).
      </div>
      <div class="box-full">
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Caitlyn Wildey - MOC Chair</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Brendan Herries - Finance</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Hilary Wilson - Admininstration</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Nathan Amai - Site, Services and Environment</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Alex Westphal (BFM) - Health, Safety and Risk</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Maria Boot (Boots) - Bar</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Georgie Holdaway - Catering</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Cam Harding - Transport and Logistics</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Jess McLean - Off-site Programme (Tours)</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Thomas Booten - On-site Programme</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Saz Mathers - Publicity and Marketing</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
        <div class="row">
          <div class="small-12 large-8 columns"><h3>Matt Street - Service</h3></div>
          <div class="small-12 large-4 columns"></div>
        </div>
      </div>
    </div>
    <!-- <div class="box preview" id="contact" title="Contact Us">
      <h2 class="box-title">Contact Us
        <span class="icon box-icon"><i class="fa fa-at"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        If you need to contact us for any reason.
      </div>
      <div class="box-full">Contact Us</div>
    </div> -->
    <div class="box preview" id="search" title = "Search">
      <h2 class="box-title">Search
        <span class="icon box-icon"><i class="fa fa-search"/></i></span>
        <a class="icon close" title="Close Box"><i class="fa fa-times"></i></a>
      </h2>
      <div class="box-preview">
        Find the information you need.
      </div>
      <div class="box-full">
        <form>
          <div class="row">
            <div class="small-12 large-6 columns">
              Use this search box to find what you need on this site.
            </div>
            <div class="small-12 large-6 columns">
              <div class="input-group">
                <input class="input-group-field" type="text"/>
                <div class="input-group-button">
                  <input type="submit" class="button" value="Search">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="box-set">
    <a class="linkbox" href="mailto:info@euromoot.com" target="_blank" title="EuroMoot Email">
      Email <span class="icon"><i class="fa fa-at"></i></span>
    </a>
    <a class="linkbox" href="https://www.facebook.com/EuroMoot2018/" target="_blank" title="EuroMoot on Facebook">
      Facebook <span class="icon"><i class="fa fa-facebook"></i></span>
    </a>
    <a class="linkbox" href="https://www.instagram.com/EuroMoot2018/" target="_blank" title="EuroMoot on Instagram">
      Instagram <span class="icon"><i class="fa fa-instagram"></i></span>
    </a>
  </div>
  <div class="scout-bar">
    <a id="scout-logo" href="http://www.scouts.org.nz/" target="_blank">
      <img src="/logos/logo-scouts.png" alt="Scouts New Zealand Logo"/>
    <a/>
  </div>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      var boxColumns = 1;
      var boxes = $(".box").toArray();

      function openBox(box, index) {
        $(box).removeClass("preview");

        var newIndex = index - (index % boxColumns);
        $(boxes[newIndex]).before(box);

        document.title = "EuroMoot - "+box.title;

        $(document).scrollTop($(box).position().top-20);
      }

      function closeBox(box, index) {
        var $box = $(box);
        if(!$box.hasClass("preview")) {
          if(index > 0) $(boxes[index-1]).after(box);
          $box.addClass("preview");
          document.title = "EuroMoot";
        }
      }

      function loadHash() {
        var index = -1;
        for(var i=0; i<boxes.length; i++) {
          if(location.hash && location.hash.substring(1) == boxes[i].id) index = i;
        }
        boxes.forEach(closeBox);
        if(0 <= index) openBox(boxes[index], index);
      }

      function sizeBackground() {
        var bw = $("#background > img").width();
        var bh = $("#background > img").height();

        var ww = $(window).width();
        var wh = $(window).height();

        if(bw/bh > ww/wh) $("#background > img").height(wh);
        else $("#background > img").height("auto");
      }

      function checkWidth() {
        var box0Y = $(".box:nth(0)").position().top;
        var box1Y = $(".box:nth(1)").position().top;
        var box2Y = $(".box:nth(2)").position().top;

        boxColumns = box0Y == box2Y ? 3 : (box0Y == box1Y ? 2 : 1);
        return boxColumns;
      }

      boxes.forEach(function(box, index) {
        $(box).click(function() {
          // If preview, open the box
          if($(box).hasClass("preview")) location.hash = box.id;
        }).find(".box-title > a.icon.close").click(function(ev) {
          ev.stopPropagation();
          location.hash = '';
        });
      });

      $(window).resize(function() {
        var prevBoxColumns = boxColumns;
        if(prevBoxColumns != checkWidth()) {
          boxes.forEach(function(box, index) {
            if(!$(box).hasClass("preview")) openBox(box, index);
          });
        }
        //sizeBackground();
      });
      checkWidth();
      //sizeBackground();

      $(window).on('hashchange', loadHash);
      loadHash();

      $("#tours-sort").change(function() {
        var sort = $("#tours-sort option:selected").val();

        var tours = $("#tour-list > .tour").toArray()
        tours.sort(function(a,b) {
          return $(a).attr("data-"+sort) > $(b).attr("data-"+sort);
        });
        tours.forEach(function(t) {
          $("#tour-list").append(t);
        });
      });
    });
  </script>
</body>
</html>
