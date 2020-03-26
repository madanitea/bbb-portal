<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = '127.0.0.1';
$databaseName = 'viconportal';
$databaseUsername = 'viconportal';
$databasePassword = 'V!conSTM';
 
$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die(mysql_error()); 
 
?>