<?php
function getComments()
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
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


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
