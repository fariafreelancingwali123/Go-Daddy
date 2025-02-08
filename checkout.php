<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <?php
    $stmt = $conn->query("TRUNCATE TABLE cart");
    echo "<p>Thank you for your purchase!</p>";
    echo "<a href='index.php'>Go Back to Home</a>";
    ?>
</body>
</html>
