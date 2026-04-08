<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ffe6f0, #ffcce0);
        }

        .box {
            width: 400px;
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

        .info {
            margin: 15px 0;
            padding: 10px;
            border-radius: 8px;
        }

        .session {
            background-color: #e6ffe6;
            color: green;
        }

        .cookie {
            background-color: #e6f0ff;
            color: blue;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff4d88;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .btn:hover {
            background-color: #e6005c;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>Welcome</h2>

    <?php
    if (isset($_SESSION['user'])) {
        echo "<div class='info session'>Session User: " . $_SESSION['user'] . "</div>";
    } else {
        echo "<div>No session found</div>";
    }

    if (isset($_COOKIE['user'])) {
        echo "<div class='info cookie'>Cookie User: " . $_COOKIE['user'] . "</div>";
    } else {
        echo "<div>No cookie found</div>";
    }
    ?>

    <a class="btn" href="logout.php">Logout</a>

</div>

</body>
</html>