<html>
<head>
    <title>
        Volg instructies
    </title>
    <style>
        body{
            background: darkslategrey;
            color: grey;
            font-size: 1.5em;
        }
        code{
            color: white;
        }
    </style>
</head>
<body>
<p>
    Hoii :D

    Ik heb hier een template die ik had gebruikt, ik ga 'm nog wel aanpassen deze week. <br />
    Bij assets staat een mapje met XML, hier staat de content in en die wordt door PHP eruit gehaald. <br />
    Ik ga dit nog veranderen naar een SQL database, ik ga kijken of ik hem op Cloud9 kan krijgen en jullie daar <br />
    aan toevoegen, en kijken of jullie ook zo kunnen pullen op Cloud9. <br />
    AUB ook je naam onder je commit + push zetten. <br />
    <br />
    Groetjes <br />
    Joost :D <br />
    <br />
    also <br />
    Download XAMPP en install hiervan de Apache en de SQL pakketen. <br />
    <a href="https://www.apachefriends.org/index.html">https://www.apachefriends.org/index.html</a> <br />
    Dit is omdat je anders een hele rare pagina krijgt. sinds de PHPStorm server geen XML bestanden kan uitlezen blijkbaar <br />
    later is dit ook makkelijker met de SQL server omdat we dan allemaal dezelfde username kunnen pakken.<br />
    <br />

    zodra je dit geinstalleerd hebt ga je naar config en vervang de text met <a href="assets/apacheConfigSettings.txt">deze text</a>. (crl+a, crl+v) <br />

    Ga daarna naar config en klik <code>Service and Port Settings</code>. <br />
    Vervang dan bij Apache de <code>Main port</code> die bij default op <code>80</code> staat voor <code>8080</code> <br />
    <img src="assets/images/Screenshot_1853.png"> <br />
    Zodra je dit allemaal gedaan hebt moet je even dit hele project verwijderen (hele map). opnieuw <a href="assets/images/Screenshot_1852.png">die tutorial</a> die ik door stuurde <br />
    in plaatjes doorlopen en als map moet je <code>C:\xampp\htdocs</code> kiezen en daar in pullen <br />
    Sorry voor al het gedoe, als alles werkt en je hebt Apache en SQL draaient kun je bij de website via <br />
    <a href="http://localhost:8080">http://localhost:8080:8080</a> <br />
    en bij PhpMyAdmin (database overzicht) via <br />
    <a href="http://localhost:8080/phpmyadmin">http://localhost:8080:8080/phpmyadmin</a> <br />
</p>
<p>
    Als je denkt dat het onzin is dat de site er dan raar uit ziet, <a href="assets/images/screencapture-joostr-ddns-net-projectSem2JCM-index-php-1495656632577.png">hier</a>, zo ziet hij er normaal uit
</p>
<hr>
</body>
</html>