<?php require 'app/model.php' ?>
<?php
function getComments($identifier)
{
    $conn = dbConnect();
    // Select elements from comments where the date is order by comment_date in descending order
    $stmt = $conn->prepare("SELECT img, author, content, DATE_FORMAT(comment_date , '%d/%m/%Y') AS comment_date FROM comment ORDER BY comment_date DESC");
    // Execute the request
    $stmt->execute();

    /* Loop the list until the statement(SQL request) find the pair key/value in an array */
    $comments = [];

    // We loop through the results
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // We add the row to the comments array
        $comments[] = $row;
    }
    // We return the comments array
    return $comments;
}

function addCommentToDb($author, $content)
{
    $conn = dbConnect();
    // Insert elements into the comments table
    $stmt = $conn->prepare("INSERT INTO comment (author, content, comment_date) VALUES (:author, :content, NOW())");
    // Bind the parameters
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':content', $content);
    // Execute the request
    $stmt->execute();
    // Return the affected lines
    return $stmt->rowCount();
}
?>