<?php
include 'db.php';

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get the user's search query
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Predefined items (mock data)
$items = [
    ['id' => 1, 'name' => 'Purse', 'price' => 20.99],
    ['id' => 2, 'name' => 'Dress', 'price' => 50.99],
    ['id' => 3, 'name' => 'Bottle', 'price' => 10.99],
    ['id' => 4, 'name' => 'Shoes', 'price' => 35.99],
    ['id' => 5, 'name' => 'Watch', 'price' => 99.99]
];

// Filter items based on query
$filteredItems = [];
if (!empty($query)) {
    foreach ($items as $item) {
        if (stripos($item['name'], $query) !== false) {
            $filteredItems[] = $item;
        }
    }
} else {
    $filteredItems = $items; // Show all items if no query
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .item { margin: 20px; display: inline-block; border: 1px solid #ddd; padding: 10px; width: 200px; }
        .item img { max-width: 100%; height: auto; }
        .item p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Search Results</h1>
    <form action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search for items" value="<?php echo htmlspecialchars($query); ?>">
        <button type="submit">Search</button>
    </form>
    <div>
        <?php
        if (!empty($filteredItems)) {
            foreach ($filteredItems as $item) {
                echo "<div class='item'>
                    <img src='https://via.placeholder.com/150' alt='{$item['name']}'>
                    <p><strong>{$item['name']}</strong></p>
                    <p>Price: $ {$item['price']}</p>
                    <form action='cart.php' method='POST'>
                        <input type='hidden' name='item_id' value='{$item['id']}'>
                        <button type='submit'>Add to Cart</button>
                    </form>
                </div>";
            }
        } else {
            echo "<p>No items found for '$query'.</p>";
        }
        ?>
    </div>
</body>
</html>
