
<!DOCTYPE html>
<html lang="en-nz">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Interactive EuroMoot Logo</title>
  <style>
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
  }

  .logo-container {
    width: 400px;
    margin: 20px auto;
  }

  @media screen and (max-width: 420px) {
    .logo-container {
      width: 100%;
      margin: 0;
    }
  }

  #crew-info {
    text-align: center;
    color: #fc0;
    font-size: 24px;
  }

  </style>
</head>
<body>
  <div class="logo-container">
  <svg id="logo" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 200 200">
    <desc>Euro Moot Logo</desc>
    <defs>
      <style type="text/css">
          .background {
            fill: #039;
          }

          #stars {
            fill: #fc0;
          }

          #highlight {
            fill: transparent;
            stroke: #fc0;
            stroke-width: 0.05;
          }

          .text {
            fill: #fc0;
            font-family: Kingthings Foundation;
            font-weight: 400;
          }

          .title {
            font-weight: 500;
          }

          .fdl-path {
            fill: #039;
            stroke: #fc0;
            stroke-width: 5;
          }

          .fdl-line {
            stroke-linecap: round;
            stroke-linejoin: round;
          }

          .fdl-star {
            fill:#fc0;
          }
      </style>
      <g id="star">
        <g id="c">
          <path id="t" d="M0,0v1h0.5z" transform="translate(0,-1)rotate(18)"/>
          <use href="#t" transform="scale(-1,1)"/>
        </g>
        <g id="a">
          <use href="#c" transform="rotate(72)"/>
          <use href="#c" transform="rotate(144)"/>
        </g>
        <use href="#a" transform="scale(-1,1)"/>
      </g>
    </defs>
    <rect class="background" width="200" height="200"/>
    <g>
      <g id="stars" transform="translate(100,100)scale(6)rotate(-15)">
        <circle id="highlight" cx="0" cy="0" r="1.25"/>
      </g>

      <circle cx="100" cy="100" r="80" fill="none" stroke="#fc0" stroke-width="1" />
    </g>
    <rect x="-75" y="-18" width="150" height="36" class="background" transform="translate(100,103)rotate(-15)"/>
    <g transform="translate(100, 100)rotate(-15)">
      <g transform="translate(-23.2,-56)scale(0.2,0.2)">
      	<path
         d="M 35.09619,158.58594 C 35.09619,158.58594 1,147.98535 1,117.32715 C 1,86.66992 22.77539,79.79297 30.51172,79.21973 C 38.24756,78.64746 78.07373,81.79883 87.81592,136.23731 C 97.55713,190.67676 87.81592,208.72754 70.91065,209.30079 C 63.54444,209.55177 54.00635,207.58106 54.29297,184.9463 C 54.29297,184.9463 82.75147,196.34474 80.65283,163.45704 C 80.09326,154.68946 76.49853,137.66993 57.73095,136.81056 C 57.73096,136.81055 40.82617,134.80469 35.09619,158.58594 z"
         class="fdl-path" />
      	<path
         d="M 197.41357,158.58594 C 197.41357,158.58594 231.50927,147.98535 231.50927,117.32715 C 231.50927,86.66992 209.73388,79.79297 201.99755,79.21973 C 194.26122,78.64746 154.43505,81.79883 144.69384,136.23731 C 134.95165,190.67676 144.69384,208.72754 161.59814,209.30079 C 168.96728,209.55177 178.50341,207.58106 178.2163,184.9463 C 178.2163,184.9463 149.75732,196.34474 151.85692,163.45704 C 152.41649,154.68946 156.01122,137.66993 174.77782,136.81056 C 174.77783,136.81055 191.68311,134.80469 197.41357,158.58594 z"
         class="fdl-path"/>
      	<g
         id="g24022">
      		<path
         d="M 129.57959,164.31934 C 135.17822,142.09375 141.25732,118.9961 144.6626,109.30469 C 152.11182,88.10254 177.12451,46.27002 116.95459,1 C 56.78564,46.27051 81.79932,88.10254 89.24854,109.30469 C 92.51417,118.59864 98.23975,140.22461 103.64307,161.58594 C 108.85401,111.5918 116.95459,38.05615 116.95459,38.05615 C 116.95459,38.05615 124.42627,114.32129 129.57959,164.31934 z"
         class="fdl-path fdl-line"/>
      		<path
         d="M 129.93311,167.75488 C 129.8169,166.6289 129.69776,165.47168 129.57959,164.31933 C 122.92822,190.71972 116.95459,215.89062 116.95459,215.89062 C 116.95459,215.89062 110.56396,188.95507 103.64307,161.58593 C 103.42432,163.68066 103.2085,165.74902 103.00147,167.75488 C 97.84424,217.60937 84.09131,226.20508 84.09131,226.20508 C 120.19287,247.98047 148.84326,224.77246 148.84326,224.77246 C 148.84326,224.77246 135.09033,217.60938 129.93311,167.75488 z"
         class="fdl-path fdl-line"/>
      		<path
         d="M 129.57959,164.31934 C 124.42627,114.32129 116.95459,38.05616 116.95459,38.05616 C 116.95459,38.05616 108.854,111.5918 103.64307,161.58595 C 110.56397,188.95509 116.95459,215.89064 116.95459,215.89064 C 116.95459,215.89064 122.92822,190.71973 129.57959,164.31934 z"
         class="fdl-path fdl-line"/>
      	</g>
      	<path
         d="M 170.24756,164.98633 C 170.24756,168.78906 167.57959,171.87598 164.29151,171.87598 L 69.61865,171.87598 C 66.32861,171.87598 63.66162,168.78907 63.66162,164.98633 L 63.66162,164.98633 C 63.66162,161.18067 66.32861,158.0957 69.61865,158.0957 L 164.2915,158.0957 C 167.57959,158.0957 170.24756,161.18066 170.24756,164.98633 L 170.24756,164.98633 z"
         class="fdl-path fdl-line"/>
      <path class="fdl-star"
         style="opacity:1;fill-opacity:1;stroke:none;stroke-width:0.43140084;stroke-linecap:butt;stroke-linejoin:round;marker:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"
         d="M 31.276085,84.270072 L 34.12134,93.088572 L 43.387465,93.069505 L 35.879804,98.500569 L 38.761329,107.30729 L 31.276085,101.84537 L 23.79084,107.30728 L 26.672365,98.500569 L 19.164705,93.069504 L 28.43083,93.088572 L 31.276085,84.270072 z"
         transform="matrix(1.1589322,0,0,1.1590976,-3.1155722,-0.8234322)" />
       <path class="fdl-star"
         transform="matrix(1.1589322,0,0,1.1590976,163.09647,-0.8234322)"
         d="M 31.276085,84.270072 L 34.12134,93.088572 L 43.387465,93.069505 L 35.879804,98.500569 L 38.761329,107.30729 L 31.276085,101.84537 L 23.79084,107.30728 L 26.672365,98.500569 L 19.164705,93.069504 L 28.43083,93.088572 L 31.276085,84.270072 z"
         style="opacity:1;fill-opacity:1;stroke:none;stroke-width:0.43140084;stroke-linecap:butt;stroke-linejoin:round;marker:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"/>
       </g>
      <text class="text title" text-anchor="middle" font-size="26" transform="translate(0, 13)">EUROMOOT</text>
      <text class="text" text-anchor="middle" font-size="24" transform="translate(0, 42)">2018</text>


      <path id="toptext" d="M -60 0 A 60 60 180 0 1 60 0" fill="none"/>
      <path id="bottomtext" d="M -70 0 A 70 70 180 0 0 70 0" fill="none"/>
      <text class="text" font-size="15" transform="rotate(22)">
        <textPath href="#toptext">
          76th NZ ROVER MOOT
        </textPath>
      </text>
      <text class="text" font-size="15" transform="rotate(-23)">
        <textPath href="#bottomtext">
          Ashburton, New Zealand
        </textPath>
      </text>
    </g>
  </svg>
  <div id="crew-info"></div>
</div>
  <script>
    var crews = [
      {name: "Aurora", location: "Invercargill" },
      {name: "Avon Cossgrove", location: "Christchurch" },
      {name: "Bays", location: "Auckland" },
      {name: "Deans", location: "Christchurch"},
      {name: "Domain", location: "Christchurch" },
      {name: "Eastman", location: "Palmerson North" },
      {name: "Harbour", location: "Dunedin" },
      {name: "Kaweka", location: "Napier" },
      {name: "Lones", location: "Everywhere" },
      {name: "Mania-O-Roto", location: "Ashburton" },
      {name: "Manukau", location: "Auckland" },
      {name: "MJS Memorial", location: "Auckland" },
      {name: "Orongorongo", location: "Wainuiomata" },
      {name: "Otago", location: "Dunedin" },
      {name: "Regal", location: "Wellington" },
      {name: "Right Royal", location: "Auckland" },
      {name: "Roskill", location: "Auckland" },
      {name: "Stewart", location: "Wanganui" },
      {name: "Valley", location: "Hutt Valley" },
      {name: "Victoria", location: "Wellington" },
      {name: "Waikato", location: "Hamilton" },
      {name: "West West", location: "Auckland" },
      {name: "Western Bay", location: "Tauranga" },
      {name: "Whakatu", location: "Nelson" },
    ];

    var autoIndex = 0;
    function autoAdvance() {
      autoIndex = (autoIndex+1) % crews.length;
      crews[autoIndex].select();

    }
    var autoInterval = setInterval(autoAdvance, 2000);

    crews.forEach(function(crew, index) {
      var angle = 360/crews.length * index;

      var star = document.createElementNS("http://www.w3.org/2000/svg", "use");
      star.className = "star";
      star.setAttribute("href", "#star");
      star.setAttribute("transform", "rotate("+angle+")translate(0,-15)rotate(-"+angle+")");
      crew.select = function() {
        document.getElementById("highlight").setAttribute("transform", "rotate("+angle+")translate(0,-15)rotate(-"+angle+")");
        document.getElementById("crew-info").innerHTML = crew.name+" Rover Crew<br/>"+crew.location;
      };

      star.onclick = function() {
        clearInterval(autoInterval);
        setTimeout(function() {
          autoInterval = setInterval(autoAdvance, 2000);
        }, 3000);

        autoIndex = crews.findIndex(function(c) {
          return c == crew;
        });
        crew.select();
      };

      document.getElementById("stars").appendChild(star);
    });

    crews[0].select();

  </script>
</body>
</html>
