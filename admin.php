<?php
session_start();
if(!isset($_SESSION['logincheck'])|| $_SESSION['logincheck'] == false) {
    header('location:logIn.php');}

$conn = new PDO("mysql:host=mysql_db;dbname=sunnyside", "root", "rootpassword");
$sql = ("SELECT * FROM trips");
$stmt = $conn->prepare($sql);
$stmt->execute();
$trips = $stmt->fetchAll();

if (isset($_POST['delete'])) {
    $sql = $conn->prepare("DELETE FROM trips WHERE tripID = :tripID");
    $sql->bindValue(':tripID', $_POST['delete']);
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
<a href="add.php">add trip</a>
Currently under construction
<a href="logout.php">log out</a>
<?php foreach ($trips as $trip) {?>
<form method="post">
    <ul>
        <li>tripID = <?php echo $trip['tripID']?> </li>
        <li>destination = <?php echo $trip['destination']?></li>
        <li>maxPeople = <?php echo $trip['maxPeople']?></li>
        <li>accomadationID = <?php echo $trip['accomadationID']?></li>
        <li>flightID = <?php echo $trip['flightID']?></li>
        <li>price = <?php echo $trip['price']?></li>
        <li>stars = <?php echo $trip['stars']?></li>
        <input type="hidden" name="delete_id" id="deleteRowId" value="">
        <a href="edit.php?id=<?php echo $trip['tripID']; ?>">edit</a>
        <button name="delete" type="submit" value="<?php echo $trip['tripID']?>">DELETE </button>
    </ul>
</form>
<?php
}
?>

</body>
</html>