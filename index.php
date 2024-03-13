<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">   
</head>
<body>
<div class="container">
        <h1 class="mt-5 text-center">Weather Information</h1>
        <form id="weatherForm" method="GET" class="mt-3">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <label for="city" class="form-label">Enter City Name:</label>
                    <input type="text" id="cityId" name="city" class="form-control" placeholder="City Name">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Get Weather</button>
                </div>
            </div>
        </form>

        <div id="weatherInfo" class="weather-info mt-3 text-center"></div>
        
    </div>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/ajaxrequest.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>