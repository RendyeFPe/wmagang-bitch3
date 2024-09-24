
<!DOCTYPE html>
<html lang="en">
<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<link rel="stylesheet" href="css/leaflet.css" />
    <script src="js/leaflet.js"></script>
	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
	</style>

	
</head>
<bod>

    <div class="z-0" id="map"></div>
    <script>
        var locations = [
            ["DISPERDAGIN Kota Kediri", -7.813637941537492, 112.00101414447164],
            ["Unit Metrologi Legal", -7.819877643193987, 111.99888994396868],
            ["Unit Metrologi Tangki Ukur Mobil (TUM)", -7.813033894448659, 112.00598031160946],
        ];

        // Set the initial map view to the first location in the locations array
        var initialLocation = [locations[0][1], locations[0][2]];
        var map = L.map('map').setView(initialLocation, 14);

        var mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; ' + mapLink + ' Contributors',
                maxZoom: 18,
            }).addTo(map);

        var customIcon = L.icon({
            iconUrl: 'images/images/marker-icon.png',
            iconSize: [20, 30], // Ukuran ikon
            iconAnchor: [10, 31], // Titik jangkar ikon
            popupAnchor: [-3, -76] // Titik jangkar popup yang relatif terhadap ikon
        });

        for (var i = 0; i < locations.length; i++) {
            var marker = L.marker([locations[i][1], locations[i][2]],{ icon: customIcon })
                .bindPopup(locations[i][0])
                .bindTooltip(locations[i][0]) // Adding tooltip
                .addTo(map);

            marker.location = [locations[i][1], locations[i][2]];

            marker.on('click', function() {
                var destination = this.location;
                window.open(`https://www.google.com/maps/search/?api=1&query=${destination[0]},${destination[1]}`);
            });
        }
    </script>

    


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/transition.js"></script>
    <script src="js/loader.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>


</html>
