<html>

<head>
    <title>GreenLeaf Elektronics | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <li class="active"><a href="users.php">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="reset-password.php"><span class="glyphicon glyphicon-user"></span> Reset Password</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <div class="container fullsize">
            <?php
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, "http://www.adeshlandge.com/exposecontacts.php");
            curl_setopt($curl_handle, CURLOPT_HEADER, 0);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
            $contents = curl_exec($curl_handle);
            curl_setopt($curl_handle, CURLOPT_URL, "http://myhvdomain.ninja/iphonestore/admin.php");
            $contents = $contents . "," . curl_exec($curl_handle);
            curl_setopt($curl_handle, CURLOPT_URL, "http://chiruhas.com/BurgerShack-CMPE-272/curl_expose.php");
            $contents = $contents . "," . curl_exec($curl_handle);
            curl_close($curl_handle);

            foreach (explode(",", $contents) as $content) {
                echo $content . "<br/>";
            }
            ?>
        </div>
    </section>
</body>

</html>