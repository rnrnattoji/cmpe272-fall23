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

<body>
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
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <div class="container fullsize">
            <div class="row">
                <div class="col-lg-7 col-sm-12 wow fadeInRight">
                    <h2>Most Visted products</h2>
                    <?php
                    $sql = "SELECT * FROM products WHERE companyid = 4 order by hits desc limit 5 ";
                    $result = $link->query($sql);
                    if (mysqli_num_rows($result) === 0) {

                        echo "<center><h1 class='lead'> No records found </h1></center>";
                    } else {
                        echo "<table class='table table-striped table-bordered'>";
                        echo "<tr>";
                        echo "<th>Product Name</th>";
                        echo "<th>Product Price</th>";
                        echo "<th>Product Views</th>";
                        echo "</tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><a href='./viewproduct.php?id=" . $row["id"] . "'>" . $row["name"] . "</a></td>";
                            echo "<td>$" . $row["price"] . "</td>";
                            echo "<td>" . $row["hits"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
</body>

</html>