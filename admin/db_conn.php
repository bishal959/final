<?php
// Read the .env file into an array
$envFile = __DIR__ . '/.env';
$envVariables = parse_ini_file($envFile);

// Database configuration
$host = $envVariables['DB_HOST'];
$user = $envVariables['DB_USER'];
$password = $envVariables['DB_PASSWORD'];
$database = $envVariables['DB_NAME'];

// Create a database connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ... Rest of your code ...
?>
