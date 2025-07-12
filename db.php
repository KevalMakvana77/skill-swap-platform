<?php
// db.php
$host = 'localhost';
$db   = 'skill_swap';
$user = 'root';
$pass = ''; // Change this to your MySQL root password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>