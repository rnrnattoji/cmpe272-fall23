<?php require "config.php" ?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style type="text/css">
        #ts {
            color: white;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="welcome.php">GreenLeaf Elektronics</a>
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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="reset-password.php"><span class="glyphicon glyphicon-user"></span> Reset Password</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <div class="container fullsize">
            <div class="row">
                <div class="col-lg-7 col-sm-12 wow fadeInRight">
                    <h2>Recently Visted products</h2>
                    <?php
                    if (isset($_COOKIE["lastids"])) {
                        echo "<table class='table table-striped table-bordered'>";
                        echo "<tr>";
                        echo "<th>Product Name</th>";
                        echo "<th>Product Price</th>";
                        echo "</tr>";
                        $hits = explode(",", $_COOKIE["lastids"]);
                        $viewed = array();
                        for ($i = 0; $i < 5 and $i < sizeof($hits); $i++) {
                            $result = $link->query("SELECT * FROM products where id = " . $hits[$i] . ";");
                            $row = $result->fetch_assoc();
                            echo "<tr>";
                            echo "<td><a href='./viewproduct.php?id=" . $row["id"] . "'>" . $row["name"] . "</a></td>";
                            echo "<td>$" . $row["price"] . "</td>";
                            echo "</tr>";
                            array_push($viewed, $hits[$i]);
                        }
                        echo "</table>";
                    } else {
                        echo "You have not viewed any products";
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
</body>

</html>