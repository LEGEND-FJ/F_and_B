<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM new_products ORDER BY product_name DESC");

$items = '';
while ($row = $result->fetch_assoc()) {
    $items .= '<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                    <img src="' . htmlspecialchars($row['product_photo']) . '" class="card-img-top product-photo" style="aspect-ratio: 1 / 1" />
                    <div class="card-body d-flex flex-column">
                    <h5 class="card-title product-name">' . htmlspecialchars($row['product_name']) . '</h5>
                    <h5 class="product-price">₦ ' . htmlspecialchars($row['price']) . ' </h5>
                    <p class="card-text">Quantity: ' . htmlspecialchars($row['quantity']) . '</p>
                    <p>Posted BY: ' . htmlspecialchars($row['posted_user']) . '</p>
                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                        <a href="#!" class="btn btn-primary shadow-0 me-1 add-to-cart-btn" style="background-color:steelblue">Add to cart</a>
                        <a href="#!" class="btn btn-light border px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                    </div>
                    </div>
                </div>';
}

$conn->close();

echo $items;
