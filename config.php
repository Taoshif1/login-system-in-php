<?php 

$host = 'localhost'; // Database host
$user = 'root'; // Database username
$password = ''; // Database password
$dbname = 'user_bd'; // Database name

$conn = new mysqli($host, $user, $password, $dbname); // Create connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Check connection
} else {
    echo "Connected successfully"; // Connection successful message
}


?>