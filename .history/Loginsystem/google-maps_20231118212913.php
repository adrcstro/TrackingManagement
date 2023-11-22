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
    $geocode_url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=YOUR_GOOGLE
