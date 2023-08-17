<?php
session_start();
$dbHost = 'localhost';
$dbName = 'pimg';
$dbUsername = 'root';
$dbPassword = '';
$dbc = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
?>