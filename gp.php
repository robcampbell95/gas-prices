<!DOCTYPE html>
<html>
<head>
    <title>Geolocation Example</title>
</head>
<body>
    <h1>Geolocation Example</h1>
    <p>Latitude: <span id="latitude"></span></p>
    <p>Longitude: <span id="longitude"></span></p>

    <script>
        // JavaScript code to get geolocation and use it in an AJAX request
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                document.getElementById("latitude").textContent = latitude;
                document.getElementById("longitude").textContent = longitude;

                // Make an AJAX request to your server with the geolocation data
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "process_location.php", true);
                xhr.setRequestHeader("Content-Type", "application/json");

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Handle the response from the server here
                        var response = JSON.parse(xhr.responseText);
                        console.log(response);
                    }
                };

                var data = {
                    latitude: latitude,
                    longitude: longitude
                };

                xhr.send(JSON.stringify(data));
            });
        } else {
            console.error("Geolocation is not supported by this browser.");
        }
    </script>
</body>
</html>

