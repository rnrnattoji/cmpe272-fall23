<?php
// Include config file
require_once "config.php";

// Function to retrieve a specific cookie value
function getCookieValue($cookieName) {
    if (isset($_COOKIE[$cookieName])) {
        return $_COOKIE[$cookieName];
    }
    return null;
}

// Retrieve the userId from the 'userid' cookie
$userid = getCookieValue('userid');


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    header("location: products.php");

    // $userid = 27;
    $productid = trim($_POST["productid"]);
    $rating = trim($_POST["rating"]);
    $comment= trim($_POST["comment"]);

    
    // SQL query to insert into 'reviews' table
    $sql = "INSERT INTO ratings (userid, productid, rating, review) VALUES (?, ?, ?, ?)";

    // Prepare the SQL statement
    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "iiis", $userid, $productid, $rating, $comment);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Records inserted successfully.";
        } else {
            echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
    }

    }

    // // Close connection
    // mysqli_close($link);

?>