<?php
function getPosts()
{
    // Use function to connect
    $conn = dbConnect();
    // Select elements from posts where the date is between 01/06/2024 and 01/06/2025
    $stmt = $conn->prepare("SELECT img, title, content, DATE_FORMAT(date, '%d/%m/%Y') AS date FROM posts WHERE date BETWEEN '2024-06-01' AND '2025-06-01'");
    // Execute the request
    $stmt->execute();

    /* Loop the list until  the statement(SQL request) find the pair key/value in an array */
    $posts = [];
    while (($row = $stmt->fetch())) {
        $post = [
            'title' => $row['title'],
            'content' => $row['content'],
            'img' => $row['img'],
        ];

        $posts[] = $post;
    }

    return $posts;
}

function getPost($identifier)
{
    $conn = dbConnect();
    // Select elements from posts where the date is between 01/06/2024 and 01/06/2025
    $stmt = $conn->prepare("SELECT img, title, content, DATE_FORMAT(date, '%d/%m/%Y') AS date FROM post WHERE date BETWEEN '2024-06-01' AND '2025-06-01'");
    // Execute the request
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // Return the posts
    $post = $row;
    return $post;
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
