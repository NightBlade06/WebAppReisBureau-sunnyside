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
            <div class="searchButtonBox">
                <button class="searchButton" type="submit"> View our choices</button>
            </div>
        </form>
    </div>
    <div class="generalBox ">
        <div class="customizationMainBox">
            <div class="customizationDestinationBox">
                <h1>Bestemming</h1>
                <select class ="customizationDestionationSelect" name="destination">
                    <option class="destionationOption">Greek</option>
                    <option class="destionationOption">Eqypt</option>
                    <option class="destionationOption">Italy</option>
                    <option class="destionationOption">Spain</option>
                </select>
            </div>
            <div class="customizationPriceBox">
                <h1>Prijs</h1>
                <p>prijs persoon tussen: € 0 - +€2000</p>
                <input type="range" min="0" max="2000" value="50" class="slider" id="myRange">
            </div>
            <verblijf>
        </div>
        <div class="travelBox">
            <img src="assets/img/cato.png" alt="" class="travelImg">
            <div class="travelInfoMainBox">
                <div class="travelInfoBox">
                    <p>&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                    <h1>[country] hotel</h1>
                    <h2>locatie, locatie, land</h2>
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
                    <h1> €Prijs</h1>
                    <button>Bekijk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <p class="footer-text">Home</p>
    <p class="footer-text">Reizen</p>
    <p class="footer-text">Over ons</p>
</footer>
</body>
</html>