<?php

session_start();

$userId = $_SESSION['username']; // Assuming user ID is stored in session
$productId = $_POST['id'];
$productName = $_POST['name']; // Added product name
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the item is already in the cart
$stmt = $conn->prepare("SELECT * FROM cart_items WHERE username = ? AND product_id = ?");
$stmt->bind_param("ii", $userId, $productId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Update the quantity if item exists
    $stmt = $conn->prepare("UPDATE cart_items SET quantity = quantity + ? WHERE username = ? AND product_id = ?");
    $stmt->bind_param("iii", $quantity, $userId, $productId);
} else {
    // Insert new item into the cart
    $stmt = $conn->prepare("INSERT INTO cart_items (username, product_id, product_name, quantity, price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisid", $userId, $productId, $productName, $quantity, $price);
}

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

// Close the connection
$stmt->close();
$conn->close();
?>
