<?php
// database variables
$dbname="POO_MVC";
$servername="localhost";
$username="root";
$password="";
try {
    // PDO connection
    $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>