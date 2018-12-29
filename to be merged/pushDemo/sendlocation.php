<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$db = "pushdemo";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$id = $_GET["username"];
$long = $_GET["longitude"];
$lat = $_GET["latitude"];

$sql = "REPLACE INTO user_location(username, longitude, latitude) VALUES('$id', '$long', '$lat')";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) {
    echo json_encode(array('respon' => 1));
} else {
    echo json_encode(array('respon' => 0));
}
 ?>
