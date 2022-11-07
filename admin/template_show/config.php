<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "ukl_laundry";

$conn = mysqli_connect($server,$username, $password, $database );

if (!$conn) {
    echo "<script>alert('Connection Failed.') </script>";
}
?>