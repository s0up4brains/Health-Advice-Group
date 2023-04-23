<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Air Quality - Health Advice Group</title>
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

<body onload=" fetchAirQuality()">

    <!-- Header -->

    <!-- Navigation -->
    <header>
        <div class="nav-top">
            <?php include "php/nav.php" ?>
        </div>
    </header>


    <!-- Page Contents -->
    <div class="current-weather">
        <button class="current-weather-btn">
            <p class="city" id="Geolocation"></p><br>
            <!-- Air quality data -->
            <p class="aqi">
            </p>
            <p class="co">
            </p>
            <p class="no">
            </p>
            <p class="no2">
            </p>
            <p class="o3">
            </p>
            <p class="so2">
            </p>
            <p class="pm2_5">
            </p>
            <p class="pm10">
            </p>
            <p class="nh3">
            </p>
        </button>
    </div>

    <br><br><br><br><br><br><br><br><br>
    <!-- Footer -->
    <?php include "php/footer.php" ?>
    <script src="js/airquality.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>