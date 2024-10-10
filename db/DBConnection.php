<?php

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'DiagonAlley';
$port = 3306;

// Establish a new database connection
try {
    $connection = new mysqli($host, $username, $password, $database, $port);

    // Check connection
    if ($connection->connect_error) {
        throw new Exception("Connection failed: " . $connection->connect_error);
    }

    // Your database operations go here

} catch (Exception $e) {
    // Handle connection error
    error_log($e->getMessage()); // Log the error for debugging purposes
    echo "An error occurred while connecting to the database. Please try again later.";
} finally {
    // Close the connection if it's open
    if (isset($connection) && $connection->ping()) {
        $connection->close();
    }
}

?>
