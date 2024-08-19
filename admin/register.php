<?php
header('Content-Type: application/json');

include 'config/db.php';

$response = ['success' => false, 'errors' => []];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $cpassword = $conn->real_escape_string($_POST['cPassword']);
    $created = date('Y-m-d H:i:s');

    if (empty($username)) {
        $response['errors']['username'] = 'Please fill in username';
    }

    if (empty($email)) {
        $response['errors']['email'] = 'Please fill in Email';
    }

    if (empty($password) || strlen($password) < 6) {
        $response['errors']['password'] = 'Please fill in a valid password';
    }

    if ($password !== $cpassword) {
        $response['errors']['cPassword'] = 'Password does not match';
    }

    if (empty($response['errors'])) {
        $stmt = $conn->prepare("INSERT INTO info (username, email, password, created_at) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $password_hash, $created);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        if ($stmt->execute()) {
            $response['success'] = true;
        } else {
            $response['errors']['db'] = 'Error: ' . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}

echo json_encode($response);
?>