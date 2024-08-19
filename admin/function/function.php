<?php

// require_once '../config/db.php';

function display_data()
{

    global $conn;
    $query = "select * from new_products";
    $result = mysqli_query($conn, $query);
    return $result;
}
