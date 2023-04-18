<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Error - Health Advice Group</title>
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

<body>
    <!-- Header -->
    <header>
        <!-- Navigation -->
        <?php include "php/nav.php" ?>
    </header>
    <br>

    <!-- Page Contents -->

    <main>
        <div class="main-heading">
            <img src="assets/error.png" alt="Error Icon">

        </div>
        <br>
        <div class="main-heading">

            <h2>ERROR</h2>
        </div>
        <br>
        <div class="main-page-body">


            <h3><a style="color:green;" href=" Signup.php">Return to Signup</a></h3>
            <br>
            <br>
            <h5>Error Details:</h5>
            <br>
            <h5 style="color:black"><?php include "process-signup.php" ?></h5>
        </div>
    </main>
    <!-- Footer -->
    <?php include "php/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>