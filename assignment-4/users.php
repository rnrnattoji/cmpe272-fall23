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
<html>

<head>
    <title>RNR Elektronics WORLD| ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .user-class {
            text-align: center;
            padding-bottom: 20px;
            font-family: 'nimbus-sans-condensed', sans-serif;
            font-size: 55px;
            font-weight: bold;

        }
    </style>
</head>

<body>
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
                        <li><a href="mostvistedproducts.php">Most Visited Products</a></li>
                        <li><a href="recentlyvisitedproducts.php">Last Visited Products</a></li>
                    </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="contacts.php">Our Contacts</a></li>
                <li class="active" ><a href="users.php">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="row" style="margin-top: 60px;">
        <div class="container" style="padding: 20px; background-color:whitesmoke; border: 3px solid  #bbb ">
            <div class="user-class">
                <h2><b>USERS</b></h2>
            </div>
        </div>
    </div>

    <br /><br />
    <section class="main-section alabaster" id="users">
        <div class="container fullsize" >
            <br />
            <br />
            <center>
                <a class="link animated fadeInUp delay-1s servicelink" href="fetchMyUsers.php">CURRENT USERS</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInUp delay-2s servicelink" href="register.php">ADD USER</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInDown delay-1s servicelink" href="searchuser.php">SEARCH USER</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInDown delay-1s servicelink" href="fetchAllUsers.php">CURL USERS</a>&nbsp;&nbsp;&nbsp;
            </center>
        </div>
    </section>
</body>

</html>