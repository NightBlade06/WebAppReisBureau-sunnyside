<?php
session_start();
if(!isset($_SESSION['logincheck'])|| $_SESSION['logincheck'] == false) {
header('location:logIn.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
Currently under construction
<a href="logout.php">log out</a>
</body>

<button>
</html>