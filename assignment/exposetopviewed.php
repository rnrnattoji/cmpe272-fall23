<?php require "config.php"?>

<?php
$sql = "SELECT * FROM products order by hits desc limit 5";
$result = $link->query($sql);
$row = $result->fetch_assoc();
$users = $row["name"].":".$row["hits"]." Views";
while($row = $result->fetch_assoc()){
    $users = $users.",".$row["name"].":".$row["hits"]." Views";
}
echo $users;
?>