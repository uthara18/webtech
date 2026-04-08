<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ffe6f0, #ffcce0);
            margin: 0;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #ff4d88;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus, textarea:focus {
            border-color: #ff4d88;
        }

        textarea {
            resize: none;
        }

        input[type="submit"] {
            background-color: #ff4d88;
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 8px;
        }

        input[type="submit"]:hover {
            background-color: #e6005c;
        }

        .nav {
            text-align: center;
            margin-top: 15px;
        }

        .nav a {
            text-decoration: none;
            color: #ff4d88;
            font-weight: bold;
        }

        .nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Add Product</h2>

    <form action="save.php" method="POST">

        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter product name">

        <label>Price:</label>
        <input type="text" name="price" placeholder="Enter price">

        <label>Description:</label>
        <textarea name="description" placeholder="Enter product details"></textarea>

        <input type="submit" value="Add Product">

    </form>

    <div class="nav">
        <a href="view.php">View Products</a>
    </div>

</div>

</body>
</html>