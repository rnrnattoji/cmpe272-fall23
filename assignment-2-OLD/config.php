<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id21349875_cmpe272user');
define('DB_PASSWORD', 'Cmpe272@password');
define('DB_NAME', 'id21349875_cmpe272');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

