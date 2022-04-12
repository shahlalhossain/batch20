<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'set2020');  // Give Your Database Name: set2020 is for Mine

/* Attempt to Connect with MySQL Database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check Database Connection
if($connection === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

