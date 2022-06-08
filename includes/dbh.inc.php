<?php 
define('$DB_HOST', 'localhost'); 
define('$DB_NAME', 'clicker'); 
define('$DB_USER','root'); 
define('$DB_PASSWORD',''); 
$con=mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD) or error_log("Failed to connect to MySQL: "); 
$db=mysqli_select_db($DB_NAME,$con) or die("Failed to connect to database: "); 

header("Location: ../index.php?sucess=true");

mysqli_close($conn);

