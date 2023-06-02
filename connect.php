<?php
/* This file contains database configuration assuming you are running mysql */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'C6h2i6r3a@');
define('DB_NAME', 'login');

// Try connecting to database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Connection Establish

if($conn == false)
    dir('Error: Cannot Connect');
?>