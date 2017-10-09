<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database ="db_php09";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// insert into db
$sql ="INSERT INTO users (name, class , age, email
VALUES ('lamphp', 'PHP09', '21', 'lam123@gmail.com')";
echo "Connected successfully";
?>