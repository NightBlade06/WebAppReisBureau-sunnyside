<?php
$conn = new PDO("mysql:host=mysql_db;dbname=sunnyside", "root", "rootpassword");

if (isset($_POST['save'])) {
    $sql = $conn->prepare("UPDATE trips SET destination=:destination, maxPeople =:maxPeople,accomadationID=:accomadationID,flightID=:flightID,price=:price,stars=:stars WHERE tripID = :tripID");
    $sql->bindParam(':destination',    $_POST['destination']);
    $sql->bindParam(':maxPeople',      $_POST['maxPeople']);
    $sql->bindParam(':accomadationID', $_POST['accomadationID']);
    $sql->bindParam(':flightID',       $_POST['flightID']);
    $sql->bindParam(':price',          $_POST['price']);
    $sql->bindParam(':stars',          $_POST['stars']);
    $sql->bindParam(':tripID',         $_GET['id']);
    $sql->execute();

    header('location:admin.php');
    exit;
}

// Fetch the existing trip data
$sql = $conn->prepare("SELECT * FROM trips WHERE tripID = :tripID");
$sql->bindParam(':tripID', $_GET['id']);
$sql->execute();
$trip = $sql->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Trip #<?php echo ($_GET['id']); ?> — Admin</title>
</head>
<body>

<div>
    <div>
        <h1>Edit Trip #<?php echo ($_GET['id']); ?></h1>
        <p>Update the details below and save to apply changes.</p>
    </div>

    <form method="post">
        <div>

            <div>
                <label for="destination">Destination</label>
                <input type="text" id="destination" name="destination"
                       value="<?php echo ($trip['destination']); ?>"
                       placeholder="e.g. Paris, France" required/>
            </div>

            <div>
                <label for="maxPeople">Max People</label>
                <input type="number" id="maxPeople" name="maxPeople"
                       value="<?php echo ($trip['maxPeople']); ?>"
                       min="1" required/>
            </div>

            <div>
                <label for="accomadationID">Accommodation ID</label>
                <input type="number" id="accomadationID" name="accomadationID"
                       value="<?php echo ($trip['accomadationID']); ?>"
                       required/>
            </div>

            <div>
                <label for="flightID">Flight ID</label>
                <input type="number" id="flightID" name="flightID"
                       value="<?php echo ($trip['flightID']); ?>"
                       required/>
            </div>

            <div>
                <label for="price">Price (€)</label>
                <input type="number" id="price" name="price" step="0.01"
                       value="<?php echo ($trip['price']); ?>"
                       min="0" required/>
            </div>

            <div>
                <label for="stars">Stars</label>
                <input type="number" id="stars" name="stars"
                       value="<?php echo ($trip['stars']); ?>"
                       min="1" max="5" required/>
            </div>

        </div>

        <div>
            <a href="admin.php">Cancel</a>
            <button type="submit" name="save">Save changes</button>
        </div>
    </form>
</div>

</body>
</html>