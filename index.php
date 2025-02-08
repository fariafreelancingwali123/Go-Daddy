<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Finder</title>
    <style>
        /* Internal CSS for simplicity */
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0; text-align: center;
        }
        header { background: #333; color: #fff; padding: 10px; }
        input, button { padding: 10px; margin: 10px; }
        footer { margin-top: 50px; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <h1>Domain Finder</h1>
    </header>
    <form action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search for a domain" required>
        <button type="submit">Search</button>
    </form>
    <footer>
        <p>&copy; 2024 Domain Finder</p>
    </footer>
</body>
</html>
