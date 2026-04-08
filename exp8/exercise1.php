<?php
$name = $email = $message = "";
$nameErr = $emailErr = $msgErr = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = clean($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = clean($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email";
        }
    }

    if (empty($_POST["message"])) {
        $msgErr = "Message required";
    } else {
        $message = clean($_POST["message"]);
    }

    if (!$nameErr && !$emailErr && !$msgErr) {
        $success = "Form submitted successfully ✅";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercise 1</title>

    <style>
        body {
            font-family: Arial;
            background-color: lavender;
            margin: 0;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
            color: purple;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: none;
        }

        .error {
            color: red;
            font-size: 13px;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 15px;
        }

        input[type="submit"] {
            background-color: hotpink;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: deeppink;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Contact Form</h2>

    <form method="POST">

        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <div class="error"><?php echo $nameErr; ?></div><br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <div class="error"><?php echo $emailErr; ?></div><br>

        <label>Message:</label>
        <textarea name="message"><?php echo $message; ?></textarea>
        <div class="error"><?php echo $msgErr; ?></div>

        <input type="submit" value="Submit">

    </form>

    <div class="success"><?php echo $success; ?></div>

</div>

</body>
</html>