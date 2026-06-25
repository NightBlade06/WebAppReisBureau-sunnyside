<?php
$conn = new PDO("mysql:host=mysql_db;dbname=sunnyside", "root", "rootpassword");
$sql = ("SELECT * FROM trips r join accomadation v on r.accomadationID = v.accomadationID");
$stmt = $conn->prepare($sql);
$stmt->execute();
$tripDetails = $stmt->fetchAll();

if (isset($_GET['search'])) {
    $sql = $connectie->prepare("SELECT * FROM trips r join accomadation v on r.accomadationID = v.accomadationID");
    $sql->bindValue(':filter', '%' . $_GET['filter'] . '%');
    $sql->execute();
    $result = $sql->fetchAll();



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/overzicht.css">
</head>
<body>
<header>
    <img src="assets/img/header-img.jpg" alt="header-img">
</header>
<main>
    <div class="searchBox">
        <form class="searchForm">
            <div class="searchInputBox">
                <p>Destination</p>
                <Select class="searchSelect" name="destination">
                    <option class="searchOption" value="0">Greek</option>
                    <option class="searchOption" value="1">Eqypt</option>
                    <option class="searchOption" value="2">Italy</option>
                    <option class="searchOption" value="4">Spain</option>
                </Select>
            </div>
            <div class="searchInputBox">
                <p>Depature date</p>
                <Select class="searchSelect" name="destination">
                    <option class="searchOption" value="5">14 may</option>
                    <option class="searchOption" value="6">12 jan</option>
                    <option class="searchOption" value="7">48 dec</option>
                    <option class="searchOption" value="8">13 nov</option>
                </Select>
            </div>
            <div class="searchInputBox">
                <p>Duration</p>
                <Select class="searchSelect" name="destination">
                    <option class="searchOption" value="9">1 week</option>
                    <option class="searchOption" value="10">2 weeks</option>
                    <option class="searchOption" value="11">3 weeks</option>
                    <option class="searchOption" value="12">4 weeks</option>
                </Select>
            </div>
            <div class="searchInputBox">
                <p>Travellers</p>
                <Select class="searchSelect" name="destination">
                    <option class="searchOption" value="13">1</option>
                    <option class="searchOption" value="14">2</option>
                    <option class="searchOption" value="15">3</option>
                    <option class="searchOption" value="16">4</option>
                </Select>
            </div>
            <form class="searchButtonBox" id="search" >
                <button class="searchButton" type="submit"> View our choices</button>
            </form>
        </form>
    </div>
    <div class="generalBox ">
        <div class="customizationMainBox  ">
            <div class="customizationDestinationBox">
                <h1>Bestemming</h1>
                <select class="customizationDestionationSelect" name="destination">
                    <option class="destionationOption">Greek</option>
                    <option class="destionationOption">Eqypt</option>
                    <option class="destionationOption">Italy</option>
                    <option class="destionationOption">Spain</option>
                </select>
            </div>
            <div class="customizationPriceBox">
                <h1>Prijs</h1>
                <p class="outputText">Max amount of money</p>
                <p class="output" id="output"> 200 </p>
                <input id="customizationPriceSlider" class="customizationPriceSlider" type="range" min="0" max="2000"
                       value="2000" class="slider" id="myRange">
            </div>

        </div>
        <div class="column-trips">
            <?php foreach ($tripDetails as $tripDetail) { ?>
                <div class="travelBox">
                    <img src="assets/img/cato.png" alt="" class="travelImg">
                    <div class="travelInfoMainBox">
                        <div class="travelInfoBox">
                            <p>&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                            <h1><?php echo $tripDetail['location']?></h1>
                            <h2>country: <?php echo $tripDetail['destination']; ?></h2>
                            <ul>
                                <li>info</li>
                                <li>info</li>
                                <li>info</li>
                            </ul>
                            <h4>datum || datum</h4>
                            <h5>plane from location</h5>
                        </div>
                        <div class="travelInfoBox">
                            <img src="assets/img/heaert%20border(64px).png" alt="" class="heartImg">
                            <div class="travelPrizeBox">
                                <p>Vanaf prijs p.p.</p>
                                <h1> €<?php echo $tripDetail['price']; ?></h1>
                                <button>Bekijk</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<footer>
    <a href="index.php" class="footer-text">Home</a>
    <a href="overzicht.php" class="footer-text">Reizen</a>
    <a href="login.php" class="footer-text">Login</a>
</footer>
</body>
<script src="assets/js/script.js"></script>
</html>