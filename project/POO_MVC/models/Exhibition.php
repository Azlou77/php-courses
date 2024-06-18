<?php
function getExhibitions(){
    // Database variables
$dbname="POO_MVC";
$servername="localhost";
$username="root";
$password="";
try {
    // PDO connection
    $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

// We retrieve only the last events


// Select elements from exhibitions where the date is between 01/06/2024 and 01/06/2025
$stmt = $conn->prepare("SELECT img, title, content, DATE_FORMAT(date, '%d/%m/%Y') AS date FROM exhibition WHERE date BETWEEN '2024-06-01' AND '2025-06-01'");
// Execute the request
$stmt->execute();

/* Loop the list until  the statement(SQL request) find the pair key/value in an array */
$exhibitions = [];

// We loop through the results
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // We add the row to the exhibitions array
    $exhibitions[] = $row;
}
// We return the exhibitions array
return $exhibitions;
}

