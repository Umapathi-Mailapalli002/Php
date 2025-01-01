<?php
$username = 'root';
$password = '';
$host = 'localhost';

try {
    $conn = new PDO("mysql:host=$host;dbName=college", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connection Successfull!!!";
} catch (PDOException $e) {
    echo "Failed to connect to Database!!! $e->getMessage()";
}
?>