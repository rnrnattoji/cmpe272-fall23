<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNR Elektronics WORLD | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url('./images/computer.jpg'); /* Replace 'your-image.jpg' with the path to your image */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover; /* This ensures the image covers the entire body */
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

    <div class="container" style="margin-top:60px;float:mid; background-color:powderblue;">
        <h1 class="my-5">Hi, <b style="text-transform:capitalize"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to RNR Elektronics WORLD.</h1>

    </div>


</body>

</html>