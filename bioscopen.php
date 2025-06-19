<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontdek de nieuwste films & bioscopen</title>
  <meta name="description" content="Blijf op de hoogte van de nieuwste films, trailers, recensies en bioscoopnieuws. Alles over films op één plek.">
  <meta name="author" content="Angela Bansie">
  <link rel="stylesheet" href="CSS/Style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script type="module" src="/Groep2_Angela_Spuranthi/JS/initMaps.js"></script>
</head>
<body>

<?php include 'header2.php'; ?>

<section class="bioscoop-section">
  <h2>Pathé Arena – Amsterdam</h2>
  <p>Gelegen in de Arena Boulevard. Groot aanbod aan films, IMAX beschikbaar.</p>
  <article id="map1" class="map-small"></article>
</section>

<section class="bioscoop-section">
  <h2>Kinepolis – Utrecht</h2>
  <p>Modern complex met luxe zitplekken in Utrecht Jaarbeurs.</p>
  <article id="map2" class="map-small"></article>
</section>

<section class="bioscoop-section">
  <h2>Vue – Den Haag</h2>
  <p>Centraal gelegen bioscoop met Dolby Atmos en recliner seats.</p>
  <article id="map3" class="map-small"></article>
</section>

<section class="bioscoop-section">
  <h2>Pathé – Rotterdam</h2>
  <p>Bekende bioscoop in het hart van Rotterdam, dichtbij station.</p>
  <article id="map4" class="map-small"></article>
</section>

<!-- <script>
  function initMap(id, coords) {
    const map = L.map(id).setView(coords, 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap'
    }).addTo(map);
    L.marker(coords).addTo(map);
  }

  initMap('map1', [52.3135, 4.9456]); // amsterdam
  initMap('map2', [52.0907, 5.1214]); // utrecht
  initMap('map3', [52.0705, 4.3007]); // den Haag
  initMap('map4', [51.9225, 4.4792]); // rotterdam
</script> -->

<?php include 'footer.php'; ?>

</body>
</html>
