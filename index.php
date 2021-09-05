<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> GuessThePlace </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>
      // bornes pour empecher la carte StamenWatercolor de "dériver" trop loin...
      var northWest = L.latLng(90, -180);
      var southEast = L.latLng(-90, 180);
      var bornes = L.latLngBounds(northWest, southEast);
      // Initialisation de la couche StamenWatercolor
      var coucheStamenWatercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
        attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        subdomains: 'abcd',
        ext: 'jpg'
      });
      // Initialisation de la carte et association avec la div
      var map = new L.Map('maDiv', {
        center: [48.858376, 2.294442],
        minZoom: 2,
        maxZoom: 18,
        zoom: 5,
        maxBounds: bornes
      });
      //var map = L.map('maDiv').setView([48.858376, 2.294442],5);
      // Affichage de la carte
      map.addLayer(coucheStamenWatercolor);
      // Juste pour changer la forme du curseur par défaut de la souris
      document.getElementById('maDiv').style.cursor = 'crosshair'
      //map.fitBounds(bornes);
      // Initilisation d'un popup
      var popup = L.popup();
      // Fonction de conversion au format GeoJSON
      function coordGeoJSON(latlng,precision) {
        return '[' +
          L.Util.formatNum(latlng.lng, precision) + ',' +
          L.Util.formatNum(latlng.lat, precision) + ']';
      }
      // Fonction qui réagit au clic sur la carte (e contiendra les données liées au clic)
      function onMapClick(e) {
        popup.setLatLng(e.latlng)
          .setContent("Hello click détecté sur la carte !<br/> " + e.latlng.toString()+ "<br/>en GeoJSON: " + coordGeoJSON(e.latlng,7) + "<br/>Niveau de  Zoom: " + map.getZoom().toString())
          .openOn(map);
      }
      // Association Evenement/Fonction handler
      map.on('click', onMapClick);
    </script>

  </head>
  <body>
    <!-- header -->
    <header class="container-fluid">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">GuessThePlace</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="#"> à propos </a></li>
            <li><a href="#contact">contacter nous</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span>S'inscrire </a></li>
            <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!--bg image-->

    <div class="bg-image">
    </div>

    <div id="maDiv" style="width: 800px; height: 600px"></div>



    <footer class="container-fluid footer">
      <div class="container">
        <div class="row">
          <h2 id="contact"> Contactez-nous ! </h2>
            <hr class="separator">
              <div class="span6">
                    <form class="formulaireContact">

                            <div class="input-container">
                              <input type="text" id="name" name="name" class="input-field" placeholder="Nom">
                            </div>
                            <div class="input-container">
                              <input type="text" id="email" name="email" class="input-field" placeholder="Email">
                            </div>
                            <div class="input-container">
                              <textarea rows="5" id="description" name="description" class="input-field" placeholder="Description"></textarea>
                            </div>
                            <div class="controls">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                      </form>

              </div>
        </div>
      </div>
    </footer>
      </body>
</html>
