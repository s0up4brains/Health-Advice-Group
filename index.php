<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Health Advice Group - Home</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/favicon.png">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <header>
        <div class="nav-top">
            <?php include "php/nav.php" ?>
        </div>
        <!-- Page Contents -->
    </header>
    <br>

    <main>
        <div class="main-heading">
            <h2>Health Advice Group</h2>
        </div>
        <div class="main-page-body">
            <h5 class="center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi cumque temporibus ad eligendi a aut officia, hic doloribus culpa incidunt asperiores dolore nobis quo iste?</h5>
        </div>
        <section class="main-content">
            <h4 class="center">Slogan</h4>
            <div class="card-row">
                <!-- Advice Card -->
                <div class="card" style="width: 18rem;">
                    <img src="assets/card-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Advice</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="advice.php" class="btn btn-primary">Visit Page</a>
                    </div>
                </div>
                <!-- Dashboard Card -->
                <div class="card" style="width: 18rem;">
                    <img src="assets/card-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dashboard</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="dashboard.php" class="btn btn-primary">Visit Page</a>
                    </div>
                </div>
                <!-- About Card -->
                <div class="card" style="width: 18rem;">
                    <img src="assets/card-3.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">About</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="about.php" class="btn btn-primary">Visit Page</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include "php/contact-table.php" ?>
        <?php include "php/find-us-table.php" ?>

</body>

</html>
</section>
</main>
<!-- Footer -->
<?php include "php/footer.php" ?>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
</body>


</html>