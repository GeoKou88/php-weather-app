<?php
    class Weather
    {
        private $apiKey = '510eb7be47904818b8a174646202809';
        private $apiUrl = 'http://api.weatherapi.com/v1/current.json';

        public function getWeather($city) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->apiUrl.'?q='.$city.'&key='.$this->apiKey.'&land=el',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ));
            
            $response = curl_exec($curl);
            curl_close($curl);

            return json_decode($response, true);
        }
    }
?>