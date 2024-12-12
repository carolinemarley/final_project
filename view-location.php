<!-- view-location.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Map</title>

    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        /* Define the map's size */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

<h2>Location Map</h2>

<!-- Create a div to hold the map -->
<div id="map"></div>

<!-- Include Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Define the static latitude and longitude values
    var latitude = 17.763;
    var longitude = 32.3514;

    // Create the map object and set the initial view (latitude, longitude, zoom level)
    var map = L.map('map').setView([latitude, longitude], 13);

    // Add the OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker at the specific location
    L.marker([latitude, longitude]).addTo(map)
        .bindPopup("<b>Location</b><br />This is your specified location.")
        .openPopup();
</script>

</body>
</html>
