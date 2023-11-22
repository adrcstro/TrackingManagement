<?php
if (isset($_POST["submit_address"])) {
    $address = $_POST["address"];
    $destination = $_POST["destination"];
    $address = str_replace(" ", "+", $address);
    $destination = str_replace(" ", "+", $destination);
    
    // Function to calculate Haversine distance
    function haversineDistance($lat1, $lon1, $lat2, $lon2) {
        $earthRadius = 6371; // in kilometers
        
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
        
        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        
        $distance = $earthRadius * $c;
        
        return $distance;
    }
    
    // Example coordinates (you'll need to replace these with the actual coordinates)
    $addressCoords = ["latitude" => 37.7749, "longitude" => -122.4194];
    $destinationCoords = ["latitude" => 34.0522, "longitude" => -118.2437];
    
    // Calculate Haversine distance
    $distance = haversineDistance($addressCoords["latitude"], $addressCoords["longitude"], $destinationCoords["latitude"], $destinationCoords["longitude"]);
    ?>

    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&destination=<?php echo $destination; ?>&output=embed"></iframe>
    
    <p>Approximate Distance: <?php echo $distance; ?> km</p>

    <?php
}
?>

<form method="POST">
    <p>
        <input type="text" name="address" placeholder="Enter address">
    </p>
    <p>
        <input type="text" name="destination" placeholder="Enter destination">
    </p>

    <input type="submit" name="submit_address">
</form>
