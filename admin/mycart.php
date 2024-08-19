<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Signin.php"); // redirect to login if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f4f4f4;
        }

        #cartSummary {
            margin-top: 20px;
        }

        #checkoutButton {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        #checkoutButton:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Cart</h1>
    </header>
    <main>
        <table id="cartTable">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "users_db";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $userId = $_SESSION['username'];
                // Query to get cart items
                $stmt = $conn->prepare("SELECT * FROM cart_items WHERE username = ?");
                $stmt->bind_param("i", $userId);
                $stmt->execute();
                $result = $stmt->get_result();

                $cartTotal = 0;
                while ($row = $result->fetch_assoc()) {
                    $total = $row['quantity'] * $row['price'];
                    $cartTotal += $total;
                    echo '<tr>
                        <td>' . htmlspecialchars($row['product_id']) . '</td>
                        <td>' . htmlspecialchars($row['quantity']) . '</td>
                        <td>₦ ' . htmlspecialchars($row['price']) . '</td>
                        <td>₦ ' . number_format($total, 2) . '</td>
                        <td><button class="removeButton" data-id="' . htmlspecialchars($row['id']) . '">Remove</button></td>
                    </tr>';
                }

                echo '<tr><td colspan="3" style="text-align:right"><strong>Total:</strong></td><td>₦ ' . number_format($cartTotal, 2) . '</td><td></td></tr>';

                // Close the connection
                $stmt->close();
                $conn->close();
                ?>
            </tbody>
        </table>
        <div id="cartSummary">
            <button id="checkoutButton">Checkout</button>
        </div>
    </main>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.removeButton').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;

                fetch('remove_item.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `id=${id}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload(); // Reload the page to reflect changes
                    } else {
                        alert('Failed to remove item from cart.');
                    }
                });
            });
        });
    });
    </script>
</body>
</html>
