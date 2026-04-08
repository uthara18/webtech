<?php
$name = $email = $message = "";
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    $name = clean($_POST["name"]);
    $email = clean($_POST["email"]);
    $message = clean($_POST["message"]);

    if ($name == "") {
        $errors[] = "Enter your name";
    }

    if ($email == "") {
        $errors[] = "Enter your email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email not valid";
    }

    if ($message == "") {
        $errors[] = "Enter message";
    }

    if (empty($errors)) {
        $success = "Submitted Successfully 🎉";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercise 2</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ffdde1, #ee9ca7);
            margin: 0;
        }

        .container {
            width: 420px;
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

        .error-box {
            background-color: #ffe6e6;
            color: red;
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
        }

        .success-box {
            background-color: #e6ffe6;
            color: green;
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #ff4d88;
            color: white;
            border: none;
            padding: 12px;
            margin-top: 15px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 8px;
        }

        input[type="submit"]:hover {
            background-color: #e6005c;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Customer Contact Form</h2>

    <form method="POST">

        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>"><br><br>

        <label>Message:</label>
        <textarea name="message"><?php echo $message; ?></textarea><br>

        <input type="submit" value="Submit">

    </form>

    <!-- Error Display -->
    <?php
    if (!empty($errors)) {
        echo "<div class='error-box'>";
        foreach ($errors as $e) {
            echo $e . "<br>";
        }
        echo "</div>";
    }
    ?>

    <!-- Success -->
    <?php
    if ($success) {
        echo "<div class='success-box'>$success</div>";
    }
    ?>

</div>

</body>
</html>