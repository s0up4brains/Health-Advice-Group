<!-- Header Navigation for all pages -->
<!-- Intitialised using php include -->

<!-- LOGO -->
<a href="index.php"><img class="logo" src="assets/headerlogo.png" alt="Health Advice Group Logo"></a>

<!-- Navigation -->
<nav class="navbar">
    <div class="main-nav">
        <ul>
            <li><a href="advice.php">Advice</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="about.php">About</a></li>
            <li>
                <a href="account.php"><img src="assets/user.png"></a>
            </li>
        </ul>
    </div>
    <!-- Burger Menu -->
    <div class="burger">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="advice.php">Advice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="forecast-dashboard.php">Forecast</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="air-quality-dashboard.php">Air Quality</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="account.php">Account</a>
                    </li>

                </ul>


            </div>

        </div>


    </div>

</nav>