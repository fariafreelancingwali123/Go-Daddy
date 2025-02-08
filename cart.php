<?php
// Mock items (same as in search.php)
$items = [
    ['id' => 1, 'name' => 'Purse', 'price' => 20.99],
    ['id' => 2, 'name' => 'Dress', 'price' => 50.99],
    ['id' => 3, 'name' => 'Bottle', 'price' => 10.99],
    ['id' => 4, 'name' => 'Shoes', 'price' => 35.99],
    ['id' => 5, 'name' => 'Watch', 'price' => 99.99]
];

// Start session to manage cart
session_start();

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    foreach ($items as $item) {
        if ($item['id'] == $item_id) {
            $_SESSION['cart'][] = $item;
        }
    }
}

// Display cart items
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <?php if (!empty($_SESSION['cart'])): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li><?php echo "{$item['name']} - $ {$item['price']}"; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="checkout.php">Proceed to Checkout</a>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</body>
</html>
