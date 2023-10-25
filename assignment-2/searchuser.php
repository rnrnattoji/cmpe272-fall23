<?php
include 'config.php';
$searchErr = '';
$employee_details = '';
if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $link->prepare("select * from users where name like '%$search%' or contact like '%$search%' or email like '%$search%'");
        //$stmt->execute();  
        $sql = "select * from users where name like '%$search%' or contact like '%$search%' or email like '%$search%'";
        $employee_details = $link->query($sql);
        //$employee_details = $stmt->fetch_assoc(PDO::FETCH_ASSOC);
    } else {
        $searchErr = "Please enter the information!";
    }
}
?>
<html>

<head>

    <head>
        <title>RNR Elektronics WORLD | ONLINE ELECTRONICS SHOPPING STORE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
    <style>
        .container {
            width: 70%;
            height: 30%;
            padding: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
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
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="contacts.php">Our Contacts</a></li>
                <li class="active"><a href="users.php">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <br /><br />
    <br /><br />
    <div class="container">
        <br /><br />
        <form class="form-horizontal" action="#" method="post">
            <div class="row">
                <div class="form-group">
                    <label for="email"><b>Search Users :</b></label>
                    <div>
                        <input type="text" class="form-control" name="search" placeholder="name/email/phone here">
                    </div><br />
                    <div>
                        <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
                    </div>
                </div>
                <div class="form-group">
                    <span class="error" style="color:red;">* <?php echo $searchErr; ?></span>
                </div>

            </div>
        </form>
        <br /><br />
        <h3><u>Search Result</u></h3><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!$employee_details) {
                        echo '<tr><b>Sorry, No data found</b></tr>';
                    } else {
                        foreach ($employee_details as $key => $value) {
                    ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['contact']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><?php echo $value['address']; ?></td>
                            </tr>

                    <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>

</html>