<?php 

//Step 4
declare(strict_types=1);

// Database connection variables
$host = "localhost"; 
$db = "lab_one"; 
$user = "root"; 
$pass = ""; 

// Data Source Name for the PDO connection
$dsn = "mysql:host=$host;dbname=$db";

try {
 $pdo = new PDO($dsn, $user, $pass); //new PDO instance to connect to the database
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //throw exceptions if an error occurs
 echo "Connected to the database! Yay! <br>"; //success message to confirm connection

}
catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());//error message if the connection fails
}