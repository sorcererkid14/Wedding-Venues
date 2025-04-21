<?php
include 'db-config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}
// echo "Connected successfully";

$sql = "SELECT * FROM venue";
$result = mysqli_query($conn, $sql);

$data = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data['venue'][] = $row;
    }

} else {
    $data['venue'][] = [];
}

$sql = "SELECT * FROM catering";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data['catering'][] = $row;
    }


} else {
    $data['catering'][] = [];
}


$sql = "SELECT * FROM venue_booking";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data['venue_booking'][] = $row;
    }

} else {
    $data['venue_booking'][] = [];
}


$sql = "SELECT * FROM venue_review_score";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data['venue_review_score'][] = $row;
    }

} else {
    $data['venue_review_score'][] = [];
}

mysqli_close($conn);

header('Content-Type: application/json');
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
echo $jsonData;



?>