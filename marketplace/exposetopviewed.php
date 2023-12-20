<?php require "config.php"?>

<?php
$sql = "SELECT * FROM products order by hits desc limit 5";
$result = $link->query($sql);
// $row = $result->fetch_assoc();
// $users = $row["name"].":".$row["hits"]." Views";
// while($row = $result->fetch_assoc()){
//     $users = $users.",".$row["name"].":".$row["hits"]." Views";
// }
// echo $users;

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        "name" => $row['name'],
        "hits" => $row['hits'],
        "imgUrl" => "https://cmpe272.rnrnattoji.click/assignment/" . $row["imgUrl"]
    );
}
$jsonData = json_encode($data);

echo $jsonData;

?>