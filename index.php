<?php
$connectie = new PDO("mysql:host=mysql_db;dbname=sunnyside", "root", "rootpassword");
$sql = $connectie->prepare("SELECT * FROM `trips`");
$sql->execute();
$tripDetails = $sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<header>
    <img src="assets/img/header-img.jpg" alt="Header-img">
</header>

<main>
    <div>
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
            <div class="searchButtonBox">
                <button  class="searchButton" type="submit"> View our choices</button>
            </di>
        </form>
    </div>
    <div class="color-background">
        <div class=row-vacation-types>
            <div class=vacation-types-box>
                <img class="icon-img" src="assets/img/cato.png" alt="globe-icon">
                <h1>Wereldreis</h1>
            </div>
            <div class=vacation-types-box>
                <img class="icon-img" src="assets/img/cato.png" alt="globe-icon">
                <h1>Individuele reis</h1>
            </div>
            <div class=vacation-types-box>
                <img class="icon-img" src="assets/img/cato.png" alt="globe-icon">
                <h1>Familie vakantie</h1>
            </div>
            <div class=vacation-types-box>
                <img class="icon-img" src="assets/img/cato.png" alt="globe-icon">
                <h1>Last minute</h1>
            </div>
        </div>
    </div>
    <div>
        <h1>
            Uitgeligte Reizen
        </h1>
        <?php foreach($tripDetails as $tripDetail) { ?>
        <div class="uit-reizen-box">
            <div class="uit-reis">
                <img class="uit-reis-header-size" src="assets/img/header-img.jpg" alt="Header-img">
                <div class="uit-reis-margin">
                    <div class="uit-reis-row">
                        <div class="uit-reis-column">
                            <p>&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                            <h2>Naam reis/hotel</h2>
                            <h3 class>Locatie, Locatie, <?php echo $tripDetail['destination']; ?></h3class>
                        </div>
                        <div class="uit-reis-size">
                            <img class="uit-reis-icon margin-heart-icon" src="assets/img/cato.png" alt="heart-icon">
                        </div>
                    </div>
                    <ul>
                        <li>info</li>
                        <li>info</li>
                        <li>info</li>
                    </ul>
                    <div class="uit-reis-row">
                        <div class="uit-reis-column">
                            <p>datum|datum <br> ontbijt 2 personen <br> vliegveld|Schiphol </p>
                        </div>
                        <div class="margin-prijs">
                            <p>vanaf prijs p.p.</p>
                            <p>$<?php echo $tripDetail['price']; ?></p>
                            <button>Bekijk</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</main>

<footer>
    <p class="footer-text">Home</p>
    <p class="footer-text">Reizen</p>
    <p class="footer-text">Over ons</p>
</footer>
</body>
</html>