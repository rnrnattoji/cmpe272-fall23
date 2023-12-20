<html>

<head>
    <title>RNR Elektronics WORLD | ONLINE ELECTRONICS SHOPPING STORE</title>
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
                <li class="active"><a href="users.php">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <h1 style="text-align: center"><b>CURL DATA</b></h1><br />
        <div class="container">
            <div class="table-responsive">
            <h4 style="text-align: center"><b><U>RNR Elektronics WORLD</U></b></h4><br />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Cell Phone</th>
                            <th>Home Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $curl_handle = curl_init();
                                
                            curl_setopt($curl_handle, CURLOPT_URL, "http://cmpe272.rnrnattoji.click/assignment-4/exposecontacts.php");
                            curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                            $contents = curl_exec($curl_handle);
                            $data = json_decode($contents, true);
                            
                            $myInteger = 0;
                            
                            foreach ($data as $key => $item) {
                        ?>
                        <tr>
                            <td><?php echo $myInteger + 1; ?></td>
                            <td><?php echo $item['firstname']; ?></td>
                            <td><?php echo $item['lastname']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['address']; ?></td>
                            <td><?php echo $item['contact']; ?></td>
                            <td><?php echo $item['homecontact']; ?></td>
                        </tr>
                        <?php
                                $myInteger++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
            <h4 style="text-align: center"><b><U>StuffCo</U></b></h4><br />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Cell Phone</th>
                            <th>Home Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            curl_setopt($curl_handle, CURLOPT_URL, "https://cmpe272hw.pietrasik.top/user_list.php");
                            $contents = curl_exec($curl_handle);
                            $data = json_decode($contents, true);
                            $myInteger = 0;
                            foreach ($data as $key => $item) {
                        ?>
                        <tr>
                            <td><?php echo $myInteger + 1; ?></td>
                            <td><?php echo $item['first_name']; ?></td>
                            <td><?php echo $item['last_name']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['home']; ?></td>
                            <td><?php echo $item['cell_phone']; ?></td>
                            <td><?php echo $item['home_phone']; ?></td>
                        </tr>
                        <?php
                                $myInteger++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
            <h4 style="text-align: center"><b><U>Student Furniture Spot</U></b></h4><br />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Cell Phone</th>
                            <th>Home Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            curl_setopt($curl_handle, CURLOPT_URL, "https://subramanyajagadeesh-0a2895b9a580.herokuapp.com/exposed_users.php");
                            $contents = curl_exec($curl_handle);
                            $data = json_decode($contents, true);
                            $myInteger = 0;
                            foreach ($data as $key => $item) {
                        ?>
                        <tr>
                            <td><?php echo $myInteger + 1; ?></td>
                            <td><?php echo $item['first_name']; ?></td>
                            <td><?php echo $item['last_name']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['home_address']; ?></td>
                            <td><?php echo $item['cell_phone']; ?></td>
                            <td><?php echo $item['home_phone']; ?></td>
                        </tr>
                        <?php
                                $myInteger++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
            <h4 style="text-align: center"><b><U>Blend Station</U></b></h4><br />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Cell Phone</th>
                            <th>Home Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            curl_setopt($curl_handle, CURLOPT_URL, "https://sayali-cmpe272.bayaskarpowerpack.co.in/exposed_userdb.php");
                            curl_setopt($curl_handle, CURLOPT_HTTPHEADER, ['User-Agent: magic']);
                            $contents = curl_exec($curl_handle);
                            $data = json_decode($contents, true);
                            $myInteger = 0;
                            foreach ($data as $key => $item) {
                        ?>
                        <tr>    
                            <td><?php echo $myInteger + 1; ?></td>
                            <td><?php echo $item['firstname']; ?></td>
                            <td><?php echo $item['lastname']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['address']; ?></td>
                            <td><?php echo $item['cellphone']; ?></td>
                            <td><?php echo $item['homephone']; ?></td>
                        </tr>
                        <?php
                                $myInteger++;
                            }
                            curl_close($curl_handle);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>