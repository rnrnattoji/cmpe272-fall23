<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNR Elektronics WORLD | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body background="./images/iStock-1185170041.jpg" background-repeat="no-repeat" background-size="cover">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="welcome.php">RNR Elektronics WORLD</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="aboutus.php">About Us</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="products.php">All Products</a></li>
                    </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="contacts.php">Our Contacts</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top:60px;float:right">
        <h1 class="my-5">Hi, <b style="text-transform:capitalize"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to RNR Elektronics WORLD.</h1>

    </div>


</body>

</html>