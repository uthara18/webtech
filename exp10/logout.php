<?php
session_start();
session_destroy();
setcookie("user", "", time() - 3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ffe6f0, #ffcce0);
            text-align: center;
        }

        .box {
            margin-top: 150px;
        }

        h2 {
            color: #ff4d88;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff4d88;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        a:hover {
            background-color: #e6005c;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Logged out successfully ✅</h2>
    <a href="login.php">Login Again</a>
</div>

</body>
</html>