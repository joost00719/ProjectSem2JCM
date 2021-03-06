<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mojo Concerts</title>
    <link href="assets/style/stylesheet.css" rel="stylesheet">
    <link href="assets/style/slider.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/slider.js"></script>
</head>
<body>
<div id="nav">
    <?php
    require "phpfiles/includes/nav.php";
    ?>
</div>
<div id="logindiv">
    <h1>
        Inloggen:
    </h1>
    <a name="contact"></a>
    <form action="phpfiles/functions/submitLogin.php" class="center" method="post">
        <table id="tableContact">
            <tr>
                <td>
                    <input type="hidden" value="login" name="type">
                    <label for="name">Gebruikersnaam:</label>
                </td>
                <td>
                    <input name="name" type="text" class="contactInput">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">wachtwoord</label>
                </td>
                <td>
                    <input type="password" name="password" class="contactInput">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="kleur">wachtwoord kleur:</label>
                </td>
                <td>
                    <select name="kleur" class="contactInput">
                        <option value="groen">groen</option>
                        <option value="roze">roze</option>
                        <option value="paars">paars</option>
                        <option value="oranje">oranje</option>
                        <option value="blauw">blauw</option>
                        <option value="geel">geel</option>
                        <option value="wit">wit</option>
                        <option value="zwart">zwart</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
            <tr>
                Of registreer <a href="register.php">hier</a> als beheerder
            </tr>
        </table>
    </form>
</div>
</body>
</html>