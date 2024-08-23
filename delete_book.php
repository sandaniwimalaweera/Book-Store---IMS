<?php 
include('../connection/connection.php');

// Get the ISBN from the query string and sanitize it
$isbn = mysqli_real_escape_string($connection, $_GET['isbn']);

// Check if the ISBN is valid and delete the book
if (!empty($isbn)) {
    // Prepare the delete query
    $query = "DELETE FROM book WHERE isbn='$isbn'";

    // Execute the query and check for success
    if (mysqli_query($connection, $query)) {
        // Successfully deleted the book, redirect to the book details page
        header('location:dashb.php?option=book_detail');
        exit();
    } else {
        // Query failed, handle the error
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    // Invalid ISBN, redirect back to book details with an error message
    header('location:dashb.php?option=book_detail');
    exit();
}

?>
