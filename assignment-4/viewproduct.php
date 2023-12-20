<?php require "config.php" ?>
<?php
parse_str($_SERVER['QUERY_STRING'], $output);
$id = $output['id'];
$result = $link->query("SELECT * FROM products where id = " . $id . ";");
$prod = $result->fetch_assoc();
$hits = $prod["hits"] + 1;
$link->query("UPDATE products SET hits = " . $hits . " WHERE id = " . $id . ";");
//$con->close();
?>
<?php
if (isset($_COOKIE["lastids"])) {
    if (explode(",", $_COOKIE["lastids"])[0] != $prod["id"]) {
        setcookie("lastids", $prod["id"] . "," . $_COOKIE["lastids"], time() + (86400 * 30));
    }
} else {
    setcookie("lastids", $prod["id"], time() + (86400 * 30));
}
?>

<html>

<head>
    <title>RNR Elektronics WORLD | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<style>
    .content-wrapper {
        width: 1050px;
        margin: 0 auto;
    }

    .product {
        display: flex;
        padding: 40px 0;
    }

    .product>div {
        padding-left: 15px;
    }

    .product h1 {
        font-size: 34px;
        font-weight: normal;
        margin: 0;
        padding: 20px 0 10px 0;
    }

    .product .price {
        display: block;
        font-size: 22px;
        color: #999999;
    }

    .product form {
        display: flex;
        flex-flow: column;
    }
</style>

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
                <li class=""><a href="users.php">Users</a></li>
            </ul>
        </div>
    </nav>
    <section class="main-section alabaster" id="about" style="margin-top:60px;">
        <div class="product content-wrapper">
            <?php echo "<img src='" . $prod["imgUrl"] . "' width='400' height='400' alt=" . $prod["name"] . ">"; ?>
            <div>
                <h1 class="name"><?php echo $prod["name"] ?></h1>
                <span class="price">
                    $ <?php echo $prod["price"] ?>
                </span>
                <form action="welcome.php?page=cart" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="<?=$prod['price']?>" 
                    placeholder="Quantity" required></input>
                    <input type="hidden" name="product_id" value="<?=$prod['id']?>">
                    <input type="submit" value="Add to Cart">
                </form>
                <div class="description">
                    <?php echo $prod["description"] ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>