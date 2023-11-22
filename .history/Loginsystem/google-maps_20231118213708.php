<?php
if (isset($_POST["submit_address"])) {
    $origin_address = $_POST["origin_address"];
    $destination_address = $_POST["destination_address"];

    // Get coordinates for origin address
    $origin_coordinates = getCoordinates($origin_address);

    // Get coordinates for destination address
    $destination_coordinates = getCoordinates($destination_address);

    // Calculate distance between coordinates
    $distance = calculateDistance($origin_coordinates, $destination_coordinates);

    // Display the map
    ?>
    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $origin_address; ?>&output=embed"></iframe>
    <p>Distance between <?php echo $origin_address; ?> and <?php echo $destination_address; ?>: <?php echo $distance; ?> km</p>
    <?php
}

function getCoordinates($address) {
    $address = str_replace(" ", "+", $address);
    $geocode_url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=YOUR_GOOGLE_MAPS_API_KEY";
    $geocode_json = file_get_contents($geocode_url);
    $geocode_data = json_decode($geocode_json, true);

    if ($geocode_data && $geocode_data["status"] == "OK") {
        $latitude = $geocode_data["results"][0]["geometry"]["location"]["lat"];
        $longitude = $geocode_data["results"][0]["geometry"]["location"]["lng"];
        return array("latitude" => $latitude, "longitude" => $longitude);
    } else {
        return false;
    }
}

function calculateDistance($origin, $destination) {
    $earth_radius = 6371; // Radius of the Earth in kilometers

    $lat_diff = deg2rad($destination["latitude"] - $origin["latitude"]);
    $lng_diff = deg2rad($destination["longitude"] - $origin["longitude"]);

    $a = sin($lat_diff / 2) * sin($lat_diff / 2) +
         cos(deg2rad($origin["latitude"])) * cos(deg2rad($destination["latitude"])) *
         sin($lng_diff / 2) * sin($lng_diff / 2);

    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    $distance = $earth_radius * $c; // Distance in kilometers

    return round($distance, 2);
}
?>

<form method="POST">
    <p>
        <input type="text" name="origin_address" placeholder="Enter origin address">
    </p>
    <p>
        <input type="text" name="destination_address" placeholder="Enter destination address">
    </p>

    <input type="submit" name="submit_address">
</form>
