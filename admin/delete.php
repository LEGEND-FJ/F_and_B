<?php
require_once 'config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM new_products WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header('Location: Add.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
