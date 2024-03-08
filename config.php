<?php
$servername = getenv('MYSQLHOST') ?: "localhost";
$username = getenv('MYSQLUSER') ?: "root";
$password = getenv('MYSQL_ROOT_PASSWORD') ?: "admin";
$dbname = getenv('MYSQLDATABASE') ?: "railway";
$dbport = getenv('MYSQLPORT');

$conn = new mysqli($servername, $username, $password, $dbname, $dbport);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
