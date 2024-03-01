<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

echo "Welcome to the Dashboard!";

// Include logout link here
echo "<br><a href='logout.php'>Logout</a>";
?>