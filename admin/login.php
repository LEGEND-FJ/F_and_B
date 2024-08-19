<?php
header('Content-Type: application/json');

include 'config/db.php';

$response = ['success' => false, 'errors' => [], 'redirect' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    if (empty($username)) {
        $response['errors']['username'] = 'Please fill in username';
    }

    if (empty($password) || strlen($password) < 6) {
        $response['errors']['password'] = 'Please fill in a valid password';
    }

    if (empty($response['errors'])) {
        $stmt = $conn->prepare("SELECT * FROM info WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['username'] = $row['username'];
                $response['success'] = true;

                // Redirect based on username
                if ($row['username'] === 'addy') {
                    $response['redirect'] = 'user.php';
                } else {
                    $response['redirect'] = 'profile.php';
                }
            } else {
                $response['errors']['password'] = 'Invalid password.';
            }
        } else {
            $response['errors']['username'] = 'No user found with that username.';
        }

        $stmt->close();
    }

    $conn->close();
}

echo json_encode($response);
?>