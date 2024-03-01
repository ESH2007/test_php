<?php
$servername = getenv('DB_SERVER_NAME') ?: "localhost";
$username = getenv('DB_USERNAME') ?: "your_username";
$password = getenv('DB_PASSWORD') ?: "your_password";
$dbname = getenv('DB_NAME') ?: "user_authentication";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
