<?php
if (isset($_POST['add'])) {
    $conn = new PDO("mysql:host=mysql_db;dbname=sunnyside", "root", "rootpassword");
    $sql = $conn->prepare("INSERT INTO trips (destination, maxPeople, accomadationID, flightID, price, stars) VALUES (:destination, :maxPeople, :accomadationID, :flightID, :price, :stars)");
    $sql->bindValue(':destination', $_POST['destination']);
    $sql->bindValue(':maxPeople', $_POST['maxPeople']);
    $sql->bindValue(':accomadationID', $_POST['accomadationID']);
    $sql->bindValue(':flightID', $_POST['flightID']);
    $sql->bindValue(':price', $_POST['price']);
    $sql->bindValue(':stars', $_POST['stars']);
    $sql->execute();
}
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
<a href="admin.php">return to admin</a>
<form method="post">
    <input name="destination" type="text" placeholder="destination">
    <input name="maxPeople" type="number" placeholder="maxPeople">
    <select name="accomadationID">
        <option value="1">Eqypt</option>
        <option value="2">Romania</option>
        <option value="3">Greece</option>
        <option value="4">Denmark</option>
        <option value="5">China</option>
    </select>
    <select name="flightID">
        <option value="1">Flight 1 to China</option>
        <option value="2">Flight 2 to Denmark</option>
        <option value="3">Flight 3 to Romania</option>
        <option value="4">Flight 4 to Greece</option>
        <option value="5">Flight 5 to Egypt</option>
    </select>
    <input name="price" type="number" placeholder="price">
    <input name="stars" type="number" placeholder="stars">
    <button name="add" type="submit">Add item</button>
</form>
</body>
</html>