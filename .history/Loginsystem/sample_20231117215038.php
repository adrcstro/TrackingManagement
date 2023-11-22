<?php

//Our starting point / origin. Change this if you wish.
$start = "Cork, Ireland";

//Our end point / destination. Change this if you wish.
$destination = "Dublin, Ireland";

//The Google Directions API URL. Do not change this.
$apiUrl = 'http://maps.googleapis.com/maps/api/directions/json';

//Construct the URL that we will visit with cURL.
$url = $apiUrl . '?' . 'origin=' . urlencode($start) . '&destination=' . urlencode($destination);

//Initiate cURL.
$curl = curl_init($url);

//Tell cURL that we want to return the data.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//Execute the request.
$res = curl_exec($curl);

//If something went wrong with the request.
if(curl_errno($curl)){
    throw new Exception(curl_error($curl));
}

//Close the cURL handle.
curl_close($curl);

//Decode the JSON data we received.
$json = json_decode(trim($res), true);

//Automatically select the first route that Google gave us.
$route = $json['routes'][0];

//Loop through the "legs" in our route and add up the distances.
$totalDistance = 0;
foreach($route['legs'] as $leg){
    $totalDistance = $totalDistance + $leg['distance']['value'];
}

//Divide by 1000 to get the distance in KM.
$totalDistance = round($totalDistance / 1000);

//Print out the result.
echo 'Total distance is ' . $totalDistance . 'km';

//var_dump the original array, for illustrative purposes.
var_dump($json);