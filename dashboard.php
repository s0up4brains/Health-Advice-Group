<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Dashboard - Health Advice Group</title>
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
    <header>
        <!-- Navigation -->
        <?php include "php/nav.php" ?>
    </header>


    <!-- Page Contents -->

    <div>
        <h2 class="main-heading center">Dashboard Overview</h2>
    </div>
    <div class="main-page-body">
        <h5 class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi cumque temporibus ad eligendi a aut officia, hic doloribus culpa incidunt asperiores dolore nobis quo iste?</h5>
    </div>
    <section class="main-content">
        <h4 class="center">Select a service</h4>
        <div class="card-row">
            <!-- Forecast Card -->
            <div class="card" style="width: 18rem;">
                <img src="assets/card-4.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Forecast</h5>
                    <p class="card-text">Shows the Weather and the hourly Forecast for the next 5 days.</p>
                    <a href="forecast-dashboard.php" class="btn btn-primary">Visit Page</a>
                </div>
            </div>
            <!-- AQI Card -->
            <div class="card" style="width: 18rem;">
                <img src="assets/card-5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Air Quality</h5>
                    <p class="card-text">Shows the current air quality rating in your area.</p>
                    <a href="air-quality-dashboard.php" class="btn btn-primary">Visit Page</a>
                </div>
            </div>
            <!-- Health Card -->
            <div class="card" style="width: 18rem;">
                <img src="assets/card-6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">COMING SOON!</h5>
                    <p class="card-text">A Personal Health Tracking System. Register for a Health Advice Group account Today</p>
                    <a href="signup.php" class="btn btn-primary">Create Account</a>
                </div>
            </div>
        </div>
    </section>

    <?php include "php/footer.php" ?>
    <script src="js/weather.js"></script>
    <script src="js/airquality.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>


</html>