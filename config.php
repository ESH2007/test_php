<?php
$servername = getenv('49036') ?: "localhost";
$username = getenv('MYSQLUSER') ?: "root";
$password = getenv('MYSQL_ROOT_PASSWORD') ?: "admin";
$dbname = getenv('MYSQLDATABASE') ?: "railway";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
