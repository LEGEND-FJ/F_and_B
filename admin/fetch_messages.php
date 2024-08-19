<?php
include 'config/db.php';


$sqlSelect = "SELECT * FROM messages ORDER BY created_at DESC LIMIT 5";
$result = $conn->query($sqlSelect);

$messages = [];


if ($result->num_rows > 0) {
    // Fetch each row and add it to the messages array
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}


echo json_encode($messages);


$conn->close();
