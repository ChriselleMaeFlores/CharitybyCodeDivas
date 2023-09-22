<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'userdb';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

?>
