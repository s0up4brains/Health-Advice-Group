<?php

session_start();

session_destroy();

header("Location: account.php");

exit;

// Logs the user out when the button is pressed