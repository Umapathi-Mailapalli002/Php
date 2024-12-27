<?php
$host = "localhost";
$username ="root";
$dbname = 'college';
$password=null;

try {
    $conn = new PDO( "mysql:host=$host;dbname=$dbname", $username, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connectin done";
} catch ( PDOException $err ) {
    echo "connection field $err->getMessage()";
}

?>