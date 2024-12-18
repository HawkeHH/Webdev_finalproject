<?php

$type     = 'mysql';                 // Type of database
$server   = 'localhost';             // Server the database is on
$db       = 'painting_database_harrington_final'; // Name of the database
$port     = '3306';                  // Default port for MySQL
$charset  = 'utf8mb4';               // UTF-8 encoding with 4 bytes per character

$username = 'root';                  // Default username
$password = 'mysql';                      // Default password for AMPPS/XAMPP

$options  = [                        
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$server;dbname=$db;port=$port;charset=$charset"; // Correct DSN format

try {
    $pdo = new PDO($dsn, $username, $password, $options); // Create PDO object
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode()); // Re-throw exception with integer code
}
    //pdo also allows for connection types from diffrent database such as NOSQL