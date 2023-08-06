<?php
// Assuming you have a database connection established
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Sanitize the user input (not recommended, use bind_param or mysqli_real_escape_string)
    

    // Delete the record from the database
    $query = "DELETE FROM books WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Close the database connection
        mysqli_close($conn);
        header("Location: Mybook.php"); // Redirect to the book page
        exit();
    } else {
        echo 'Error deleting mybooks: ' . mysqli_error($conn);
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
mysqli_close($conn);
?>