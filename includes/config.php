<?php

// create a database connection
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "my_cms";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//test if connection occured
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}
