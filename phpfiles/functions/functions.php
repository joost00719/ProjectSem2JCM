<?php
session_start();

//  pre defined variables
if(isset($_SESSION['username'])){
    $loggedInUser = $_SESSION['username'];
}else {
    $loggedInUser = "Login";
}

#   #   #   #   #   #   #   #   #   #   #   #   #   #   #   #   #   #
//functions


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


        ###     Database functies       ###

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
    //niet gefilterd omdat dit niet wordt gebruikt door de gebruiker.
function sqlSelect($table, $column, $where='1=1')
{
    $pdo = connectDatabase('festival');
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
//  returned niets, is voor de change email en password in register.php
function sqlQuery($query)
{
    $pdo = connectDatabase('festival');
    try {
        $result = $pdo->query($query);
    } catch (PDOException $e) {
        die('Database error: ' . $e->getMessage());
    }
    $array = $result->fetchAll();
    $array['num'] = $result->rowCount($query);
    return $array;
}


        ###     Login functies      ###
//  login script
function login($inputUsername, $inputPassword){
    //string filteren
    $inputUsername = filter_var($inputUsername, FILTER_SANITIZE_STRING);
    $dbPassword = sqlSelect("users", "PasswordMD5", "Username = '$inputUsername';'");

    if (md5($inputPassword) == $dbPassword) {
        $_SESSION['LoggedIn'] = true;
        $_SESSION['username'] = $inputUsername;
        return "<script>location.reload();</script>"; // Dit werkt, aub niet aanpassen naar een header();
    } else {
        return "Verkeerde username en/of wachtwoord.";
    }
}
function encryptor($password, $kleur){
    $password = strrev($password);
    $password = $password.md5($kleur);
    $password = strrev($password);
    $password = hash("md5", $password);
    $password = strrev($password);
    $password = hash("sha256", $password);
    return $password;
}