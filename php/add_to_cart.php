<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $item = [
        'image' => $productId,
        'name' => $productName,
        'price' => $productPrice,
    ];

    // Thêm sản phẩm vào giỏ hàng trong session
    $_SESSION['cart'][] = $item;

    echo 'Product added to cart successfully.';
} else {
    echo 'Invalid request.';
}
?>