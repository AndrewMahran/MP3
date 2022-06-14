<?php
$servername = "localhost";
$username = "root";
$password = "Database#1";
$db = "clicker";

$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
else {
    echo "Connected Successfully";
}
