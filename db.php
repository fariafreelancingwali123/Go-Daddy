<?php
$host = "localhost";
$dbname = "dbe14sybxoukw5";
$username = "ukaggzqxmrpfm";
$password = "rfk4kbkuqajs";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
