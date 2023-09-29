

<!DOCTYPE html>
<html>
<head>
    <title>Geolocation Example</title>
</head>
<script>
// Check if the browser supports geolocation
if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
        // Get latitude and longitude from the position object
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        // Update the HTML elements with the latitude and longitude
        document.getElementById("latitude").textContent = latitude;
        document.getElementById("longitude").textContent = longitude;

        // You can now use these variables in your query or any other application logic
    }, function(error) {
        // Handle errors here, e.g., if the user denies geolocation access
        console.error("Error getting geolocation:", error.message);
    });
} else {
    // Browser doesn't support geolocation
    console.error("Geolocation is not supported by this browser.");
}
</script>
<body>
    <h1>Geolocation Example</h1>
    <p>Latitude: <span id="latitude"></span></p>
    <p>Longitude: <span id="longitude"></span></p>
</body>
</html>

