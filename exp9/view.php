<?php
include "db.php";
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ffe6f0, #ffcce0);
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #ff4d88;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #ff4d88;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #ffe6f0;
        }

        .nav {
            text-align: center;
            margin-top: 20px;
        }

        .nav a {
            text-decoration: none;
            background-color: #ff4d88;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
        }

        .nav a:hover {
            background-color: #e6005c;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Product List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price (₹)</th>
            <th>Description</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>₹{$row['price']}</td>
                    <td>{$row['description']}</td>
                  </tr>";
        }
        ?>

    </table>

    <div class='nav'>
        <a href="add_product.php">Add New Product</a>
    </div>

</div>

</body>
</html>