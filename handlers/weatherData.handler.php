<?php
    function getWeatherData(){
        //Weather Forecast Logic
        $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $temperatures = array();
        for($i=0;$i<7;$i++){
            $temperatures[$i] = rand(-10, 40);
        }
        $weatherData = array();
        for($i=0;$i<7;$i++){
            $weatherData[$weekdays[$i]] = $temperatures[$i];
        }
        return $weatherData;
    }
    

?>