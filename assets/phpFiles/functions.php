<?php
session_start();
//  Variabele voor makkelijk gebruik in de HTML

    //configs
$title = sqlSelect("config", "ConfigValue", "ConfigIndex = 'Titel'");
$sliderSpeed = sqlSelect("config", "ConfigValue", "ConfigIndex = 'SliderSpeed'");

    //artikels
$articleHomeH1 = sqlSelect("artikel", "h1", "pagina = 'index'");
$articleHomeText = sqlSelect("artikel","text", "Pagina = 'index'");



//  pre defined variables
if(isset($_SESSION['username'])){
    $loggedInUser = $_SESSION['username'];
}else {
    $loggedInUser = "Login";
}

//functions

//haalt jaar op
function getYear(){
    return date("Y");
}

//kijkt welke getparm in page zit.
function getPage(){

    if (isset($_GET['page'])) {
        $currentPage = $_GET['page'];
        return $currentPage;
        };
};
//redirect je naar pagina, basically useless
function redirect($par)
{
    header("location: $par");
}


//Connectie naar je database functie
function connectDatabase($dbName, $dbLoginName='root', $dbPassword=''){

    if(!isset($dbName)){
        die('Database error > $dbName is undefined');
    }

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=$dbName", "$dbLoginName", "$dbPassword");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    } catch (PDOException $e) {
        die('Database error > ' . $e->getMessage());
    }

    return $pdo;
}
    //Haalt data op uit onze database met database naam Projects2
function sqlSelect($table, $column, $where='1=1')
{
    $pdo = connectDatabase('projects2');
    $query = "SELECT $column FROM $table WHERE $where";
    try {
        $result = $pdo->query($query);
    } catch (PDOException $e) {
        die('Er is een probleem met ophalen van de selectie: ' . $e->getMessage());
    }
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        return $row[$column];
    }
}
//  returned niets, is voor de change email en password in login.php
function sqlQuery($query)
{
    $pdo = connectDatabase('projects2');
    try {
        $result = $pdo->query($query);
    } catch (PDOException $e) {
        die('Database error: ' . $e->getMessage());
    }
}

//  Dit stukje code zorgt ervoor voor als we iets toevoegen of iets uit de database verwijderen van slider
//  dat het id gewoon goed blijft, dit wordt telkens uitgevoerd wanneer de pagnia wordt geopend (inefficient as fuck, i know)
//  maar dit werkt dus don't touch it, is voor het gemak van de database aanpassen enzo.
$pdo = connectDatabase('projects2');
$query = "SET @num := 0; UPDATE slider SET id = @num := (@num+1); ALTER TABLE slider AUTO_INCREMENT = 1;";
try {
    $sql = $query;
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}


//Cut string in 2 stukken in het midden.
//ripped functie
function stringCutter($text)
{
    $splitstring1 = substr($text, 0, floor(strlen($text) / 2));
    $splitstring2 = substr($text, floor(strlen($text) / 2));

    if (substr($splitstring1, 0, -1) != ' ' AND substr($splitstring2, 0, 1) != ' ') {
        $middle = strlen($splitstring1) + strpos($splitstring2, ' ') + 1;
    } else {
        $middle = strrpos(substr($text, 0, floor(strlen($text) / 2)), ' ') + 1;
    }

    $string1 = substr($text, 0, $middle);
    $string2 = substr($text, $middle);

    return array($string1, $string2);
}

//  login script
function login($inputUsername, $inputPassword){
    $dbPassword = sqlSelect("users", "PasswordMD5", "Username = '$inputUsername';'");

    if (md5($inputPassword) == $dbPassword) {
        $_SESSION['LoggedIn'] = true;
        $_SESSION['username'] = $inputUsername;
        return "<script>location.reload();</script>"; // Dit werkt, aub niet aanpassen naar een header();
    } else {
        return "Verkeerde username en/of wachtwoord.";
    }
}
