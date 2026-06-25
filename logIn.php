<?php
session_start();
$_SESSION['logincheck'] = false;
if(isset($_POST['login'])) {
    if( $_POST['password'] == 'admin'){
        $_SESSION['logincheck'] = true;
        header("location:admin.php");
    }
else {
        $_SESSION['logincheck'] = false;
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body class =>
<form method = "post">
 <input class = "login-input" name="password" id="password" type="password" placeholder="password"/>
        <button name="login" type="submit">Login</button>
</form>
</body>
<script src="assets/js/logInJS.js"></script>
</html>