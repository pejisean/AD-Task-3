<?php
    // Open-Meteo API endpoint with parameters
    $latitude =   14.6042;    // Manila Latitude
    $longitude =  120.9822;  // Manila Longitude
    $hourly = "temperature_2m,wind_speed_10m";
    $daily = "";
    $temperature_unit = "celsius";
    $wind_speed_unit = "kmh";
    $timezone = "Asia/Singapore";

    //building the URL
    $apiUrl = "https://api.open-meteo.com/v1/forecast?"
    . "latitude=$latitude&longitude=$longitude"
    . "&hourly=$hourly"
    . "&temperature_unit=$temperature_unit"
    . "&wind_speed_unit=$wind_speed_unit"
    . "&timezone=$timezone";

    //Initializing cURL options
    $ch = curl_init();

     // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $apiUrl);            // Set the URL to fetch
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    // Return the response as a string
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);    // Follow redirects if any
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   // Skip SSL verification (optional, for testing)

    //Response
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        // Decode JSON response
        $data = json_decode($response, true);
        foreach($data as $d){
            print_r($d);
            echo "<br>";
        }
        //print_r($data);
    }  


?>