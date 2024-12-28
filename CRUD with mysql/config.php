<?php
$host = "localhost";
$username="root";
$password="";
try {
$conn = new PDO("mysql:host=$host;dbname=college",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connection Success!";
} catch (PDOException $err) {
    echo "Connection Failed $err->getMessage()";
}
?>