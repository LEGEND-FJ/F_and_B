<?php
session_start();

$userId = $_SESSION['username'];
$itemId = $_POST['id'];

// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete item from cart
$stmt = $conn->prepare("DELETE FROM cart_items WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $itemId, $userId);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

// Close the connection
$stmt->close();
$conn->close();
?>
