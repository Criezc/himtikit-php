<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "himti-kit";

$koneksi = mysqli_connect($server, $username, $password, $database) or die("connection to DB Failed");
?>