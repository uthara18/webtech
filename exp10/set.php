<?php
session_start();

$name = $_POST['username'];

$_SESSION['user'] = $name;
setcookie("user", $name, time() + 3600);

header("Location: dashboard.php");
exit();
?>