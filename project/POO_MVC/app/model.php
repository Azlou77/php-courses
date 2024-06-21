<?php
function getExhibitions()
{
    // Use function to connect
    $conn = dbConnect();
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
function getExhibition($identifier)
{
    $conn = dbConnect();
    // Select elements from exhibitions where the date is between 01/06/2024 and 01/06/2025
    $stmt = $conn->prepare("SELECT img, title, content, DATE_FORMAT(date, '%d/%m/%Y') AS date FROM exhibition WHERE date BETWEEN '2024-06-01' AND '2025-06-01'");
    // Execute the request
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // Return the exhibition
    $exhibition = $row;
    return $exhibition;
}
function getComments($identifier)
{
    $conn = dbConnect();
    // Select elements from comments where the date is order by comment_date 	 in descending order
    $stmt = $conn->prepare("SELECT img, author, content, DATE_FORMAT(comment_date 	, '%d/%m/%Y') AS comment_date 	 FROM comment ORDER BY comment_date 	 DESC");
    // Execute the request
    $stmt->execute();

    /* Loop the list until  the statement(SQL request) find the pair key/value in an array */
    $comments = [];

    // We loop through the results
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // We add the row to the comments array
        $comments[] = $row;
    }
    // We return the comments array
    return $comments;
}


function dbConnect()
{
    // Database variables
    $dbname = "POO";
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        // PDO connection
        $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
