<?php
include "db.php";

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$sql = "INSERT INTO products (name, price, description)
        VALUES ('$name', '$price', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Product Added Successfully ✅<br>";
    echo "<a href='view.php'>View Products</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>