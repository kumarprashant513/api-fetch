<?php
// api.php
header("Content-Type: application/json");
include('connection.php');

$sql = "SELECT id, event_name, location, date, image_url FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $events = [];
    while($row = $result->fetch_assoc()) {
        // Append the full URL to the image path
        // $row['image_url'] = 'images/' . $row['image_url'];
        
        $events[] = $row;
        $row['image_url'] = '' . $row['image_url'];
    }
    echo json_encode($events);
} else {
    echo json_encode(["message" => "No events found"]);
}
$conn->close();
?>




































<?php
// api.php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json");
// include('connection.php');

// $sql = "SELECT id, event_name, location, date FROM events";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $events = [];
//     while($row = $result->fetch_assoc()) {
//         $events[] = $row;
//     }
//     echo json_encode($events);
// } else {
//     echo json_encode(["message" => "No events found"]);
// }
// $conn->close();
// ?>
