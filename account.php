<?php

session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Contact Us - Health Advice Group</title>
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
    <!-- Navigation -->
    <header>
        <div class="nav-top">
            <?php include "php/nav.php" ?>
        </div>
    </header>


    <!-- Page Contents -->
    <div class="account-btn-position">
        <!-- Message Displayed If the user is logged in -->
        <?php if (isset($user)) : ?>
            <h2 class="main-heading center">Welcome!</h2>
            <br>
            <p class="main-heading">Hello <?= htmlspecialchars($user["name"]) ?>, The Personal Health Tracker is currently under development. We thank you for joining the Health Advice Group</p>
            <br>
            <button class="account-btn-logout"><a href="logout.php">Log out</a></button>
            <br>
            <h4>Your Details:</h4>
            <p>Your Name: <?= htmlspecialchars($user["name"]) ?></p>
            <p>Your Email: <?= htmlspecialchars($user["email"]) ?></p>
            <!-- Includes account details from the database -->
    </div>

<?php else : ?>
    <!-- Message prompting user to log in or sign up -->
    <div>
        <h2 class="main-heading center">Accounts</h2>
    </div>
    <div class="account-btn-position">

        <br>
        <button class=" account-btn">
            <a href="login.php">Log in</a>
        </button>
        <br>
        <p style="margin: 0px 15px;"> or </p>
        <br>
        <button class="account-btn">
            <a href="signup.php">Sign up</a>
        </button>

    <?php endif; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>