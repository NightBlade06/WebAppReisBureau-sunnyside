<?php
session_start();
if(!isset($_SESSION['logincheck'])|| $_SESSION['logincheck'] == false) {
    header('location:logIn.php');}

$conn = new PDO("mysql:host=mysql_db;dbname=sunnyside", "root", "rootpassword");
$sql = ("SELECT * FROM trips");
$stmt = $conn->prepare($sql);
$stmt->execute();
$trips = $stmt->fetchAll();

if (isset($_POST['Delete'])) {
    $sql = $connectie->prepare("DELETE FROM trips WHERE id = :tripID");
    $sql->bindValue(':tripID', $_POST['delete_tripID']);
    $sql->execute();
}

if (isset($_POST['add'])) {
    $sql = $connectie->prepare("INSERT INTO Menu (destination, maxPeople, accomadationID, flightID, price, stars) VALUES (:destination, :maxPeople, :accomadationID, :flightID, :price, :stars)");
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
Currently under construction
<a href="logout.php">log out</a>
<?php foreach ($trips as $trip) {?>
<ul>
    <li>tripID = <?php echo $trip['tripID']?> </li>
    <li>destination = <?php echo $trip['destination']?></li>
    <li>maxPeople = <?php echo $trip['maxPeople']?></li>
    <li>accomadationID = <?php echo $trip['accomadationID']?></li>
    <li>flightID = <?php echo $trip['flightID']?></li>
    <li>price = <?php echo $trip['price']?></li>
    <li>stars = <?php echo $trip['stars']?></li>
</ul>
    <a href="edit.php">edit</a>
<?php
}
?>

</body>

<button>
</html>