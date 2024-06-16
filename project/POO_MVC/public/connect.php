<?php
// Database variables
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

// We retrieve only the last events
// Prepare the request
$stmt = $conn->prepare("SELECT title, content  FROM exhibition");

// Execute the request
$stmt->execute();

/* Loop the list until  the statement(SQL request) find the pair key/value in an array */
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Display the key of row, example $student["name"] = "Louis" or "Steven" etc ...
    echo $row['title'] . "<br>";
    echo $row['content'] . "<br>";

}
?>
