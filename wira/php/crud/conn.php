<?php

$server = "localhost";
$database = "perpus";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}
