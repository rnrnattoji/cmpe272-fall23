<!DOCTYPE html>
<html>

<head>
    <title>RNR Elektronics WORLD | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <style type="text/css">
        .btnCls {
            background-color: green;
        }
    </style>
    <script>
        window.addEventListener('message', function(event) {
            if(event?.data?.type === 'login'){
                localStorage.setItem("userId", event?.data.user_id)
            }
            if(event?.data?.type === 'logout'){
                localStorage.removeItem("userId", event?.data.user_id);
            }
        });
        if(localStorage.getItem('userId')){
            document.cookie = `userid=${localStorage.getItem('userId')};path=/;SameSite=None;Secure;expires=Fri, 31 Dec 9999 23:59:59 GMT`
        }
        if(!localStorage.getItem('userId')){
            document.cookie = `userid=gi;path=/;SameSite=None;Secure;expires=Fri, 31 Dec 1999 23:59:59 GMT`
        }
    </script>
</head>

<body style="background-color:#87CEEB">
    <?php require "config.php" ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="welcome.php">RNR Elektronics WORLD</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="aboutus.php">About Us</a></li>
                 <!-- <li class=""><a href="products.php">Products</a></li> -->
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
                <li class=""><a href="users.php">Users</a></li>
            </ul>
        </div>
    </nav>
    <h3>Electronic Gadgets.</h3>
    <div style="margin-top:20px; text-align: center">
        <a href="recentlyvisitedproducts.php">Your last five previously visited products.</a>
    </div>
    <div class="container" style="margin-top: 60px; margin-bottom: 100px">
        <div class="row row-style-login-page-pannel">
            <?php
            $sql = "SELECT * FROM products WHERE companyid = 4";
            $result = $link->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<div class=col-md-4 col-sm-6 col-xs-12>";
                echo "<div class='panel panel-default'>";
                echo "<div class='panel-heading'></div>";
                echo "<div class='panel-body'></div>";
                echo "<center><img class='img-responsive'  src = './images/phones/" . $row["img"] . "' height='205'>";
                echo "<b>" . $row["name"] . "<br></b>$" . $row["price"] . "<br />";
                echo "<a href='./viewproduct.php?id=" . $row["id"] . "' title='login to see full specification'><span></span>View Product Details</a>";
                echo "</center>";
                #echo "</a>";
                echo "</div></div>";
            }
            ?>
        </div>
    </div>


</body>

</html>