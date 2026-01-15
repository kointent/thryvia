<?php
// db_connect.php
$host = 'localhost';
$dbname = 'thryvia_db';
$username = 'king'; // Default XAMPP/MAMP username
$password = 'root';     // Default is empty for XAMPP, 'root' for MAMP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>