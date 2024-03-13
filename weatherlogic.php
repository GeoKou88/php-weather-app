<?php
    require_once 'Weather.php';

    if (isset($_POST['city'])) {
        $city = $_POST['city'];

        $weather = new Weather();
        $weatherData = $weather->getWeather($city);

        if ($weatherData && isset($weatherData['location'], $weatherData['current'])) {
            $location = $weatherData['location'];
            $current = $weatherData['current'];

            $name = $location['name'];
            $region = $location['region'];
            $country = $location['country'];
            $localTime = date('l jS \of F Y h:i:s A',$location['localtime_epoch']);
            $temperature = $current['temp_c'].' °C';
            $weatherCondition = $current['condition']['text'];

            $output = array(
                'city' => $name,
                'region' => $region,
                'country' => $country,
                'localTime' => $localTime,
                'temperature' => $temperature,
                'weatherCondition' => $weatherCondition
            );

            echo json_encode($output);
        } else {
            $error = 'City not found';
            echo json_encode(['error' => $error]);
            die();
        }
    } else {
        $error = 'Please enter a city name';
        echo json_encode(['error' => $error]);
        die();
    }

?>