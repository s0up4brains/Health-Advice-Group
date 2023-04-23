<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Forecast - Health Advice Group</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/favicon.png">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>

<body onload="defaultWeather()">
    <!-- Displays data for london on page load -->

    <!-- Navigation -->
    <header>
        <div class="nav-top">
            <?php include "php/nav.php" ?>
        </div>
    </header>


    <!-- Page Contents -->
    <section class="Forecast">
        <!-- City Search -->
        <div class="search">
            <input type="text" id="search-input" class="search-input" placeholder="Enter a location..." />
            <button onclick="fetchWeather()" id="search-button" class="search-btn">Search</button>
        </div>
        <!-- Current Weather -->
        <div class="current-weather">
            <br>
            <h3>Current Weather:</h3>
            <br>
            <button class="current-weather-btn">
                <img style="width:100%" class=" writeIcon">
                <h4 class=" city">Loading</h4>
                <h3 class="description">Failed to Load</h3>
                <h3 class="temp">Failed to Load</h3>
                <p class="temp_range">Failed to Load</p>
                <p class="speed">Failed to Load</p>
                <p class="clouds">Failed to Load</p>
            </button>
            <br>
            <h4><a href="advice.php">Get Advice</a></h4>
            <br>
        </div>
        <!-- Weather Forecast -->
        <div class="forecast-row">
            <button class="forecast-weather-btn">
                <img class="forecastIcon1">
                <h4 class="max1">Failed</h4>
                <p class="min1">Failed</p>

                <button class="forecast-weather-btn">
                    <img class="forecastIcon2">
                    <h4 class="max2">Failed</h4>
                    <p class="min2">Failed</p>
                </button>
                <button class="forecast-weather-btn">
                    <img class="forecastIcon3">
                    <h4 class="max3">Failed</h4>
                    <p class="min3">Failed</p>
                </button>
                <button class="forecast-weather-btn">
                    <img class="forecastIcon4">
                    <h4 class="max4">Failed</h4>
                    <p class="min4">Failed</p>
                </button>
                <button class="forecast-weather-btn">
                    <img class="forecastIcon5">
                    <h4 class="max5">Failed</h4>
                    <p class="min5">Failed</p>
                </button>
                <button class="forecast-weather-btn">
                    <img class="forecastIcon6">
                    <h4 class="max6">Failed</h4>
                    <p class="min6">Failed</p>
                </button>
        </div>



    </section>
    <br><br>
    <!-- Footer -->
    <?php include "php/footer.php" ?>
    <script src="js/weather.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>