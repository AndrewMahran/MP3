<?php
include_once 'dbh.inc.php';
$name = $_POST['username'];
$sql = "INSERT INTO clicker.clicks (username) VALUES ('$name');";
mysqli_query($conn, $sql);
header("Location: ../index.php?sucess=true");