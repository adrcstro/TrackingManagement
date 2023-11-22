<?php
if (isset($_POST["submit_address"])) {
    $origin_address = "YOUR_ORIGIN_ADDRESS"; // Replace with your actual origin address
    $destination_address = $_POST["address"];
    
    // Format addresses for the API request
    $origin_address_formatted = str_replace(" ", "+", $origin_address);
    $destination_address_formatted = str_replace(" ", "+", $destination_address);
    
    // Make API request to Google Maps Distance Matrix API
    $api_key = "YOUR_GOOGLE_MAPS_API_KEY"; // Replace with your actual API key
    $api_url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins={$origin_address_formatted}&destinations={$destination_address_formatted}&key={$api_key}";
    
    $api_response = file_get_contents($api_url);
    $data = json_decode($api_response, true);
    
    // Check if the API request was successful
    if ($data['status'] == 'OK') {
        $distance_text = $data['rows'][0]['elements'][0]['distance']['text'];
        $distance_value = $data['rows'][0]['elements'][0]['distance']['value'];
        
        ?>
        <p>Distance: <?php echo $distance_text; ?></p>
        <?php
    } else {
        ?>
        <p>Error: Unable to retrieve distance information</p>
        <?php
    }
}
?>

<form method="POST">
    <p>
        <input type="text" name="address" placeholder="Enter destination address">
    </p>
 
    <input type="submit" name="submit_address">
</form>
