<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ffe6f0, #ffcce0);
        }

        .box {
            width: 350px;
            margin: 100px auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 10px gray;
            text-align: center;
        }

        h2 {
            color: #ff4d88;
        }

        input {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #ff4d88;
            color: white;
            border: none;
            margin-top: 15px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #e6005c;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Enter Your Name</h2>

    <form action="set.php" method="POST">
        <input type="text" name="username" placeholder="Enter your name">
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>