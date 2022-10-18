<?php
$host = 'localhost';
$userName = "root";
$password = "";
$database = "DiagonAlley";
$port = "3306";

$connection = new mysqli($host, $userName, $password, $database, $port);

if ($connection->connect_error) {
    die("Connection Failed:" . $connection->connect_error);
}
