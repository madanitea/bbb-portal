<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'vicon';
$databaseUsername = 'root';
$databasePassword = '';
 
$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die(mysql_error()); 
 
?>