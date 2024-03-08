<?php
$servername = getenv('MYSQLHOST') ?: "localhost";
$username = getenv('MYSQLUSER') ?: "root";
$password = getenv('MYSQL_ROOT_PASSWORD') ?: "2B6GcH6HfHAaH2gGfG123A4CD62544g1";
$dbname = getenv('MYSQLDATABASE') ?: "railway";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
