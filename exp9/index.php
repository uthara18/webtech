<!DOCTYPE html>
<html>
<head>
    <title>Experiment 9</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ffe6f0, #ffcce0);
            margin: 0;
            text-align: center;
        }

        .container {
            margin-top: 120px;
        }

        h1 {
            color: #ff4d88;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            margin-bottom: 40px;
        }

        .card {
            display: inline-block;
            background: white;
            padding: 30px;
            margin: 20px;
            width: 220px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card a {
            text-decoration: none;
            display: block;
            background-color: #ff4d88;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            margin-top: 15px;
        }

        .card a:hover {
            background-color: #e6005c;
        }

        .icon {
            font-size: 40px;
        }

        footer {
            margin-top: 80px;
            color: gray;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Experiment 9</h1>
    <p>PHP & MySQL - Product Management System</p>

    <div class="card">
        <div class="icon">➕</div>
        <h3>Add Product</h3>
        <a href="add_product.php">Go</a>
    </div>

    <div class="card">
        <div class="icon">📦</div>
        <h3>View Products</h3>
        <a href="view.php">Go</a>
    </div>

</div>

<footer>
    © 2026 Uthara | Exp 9
</footer>

</body>
</html>