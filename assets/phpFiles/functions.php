<?php
$xmlArticle=XML2Array('assets/xml/articles.xml');




//functions
//XML naar SQL
function XML2Array($xml, $recursive = false) //ripped function
{
    if (!$recursive) {
        $array = simplexml_load_file($xml);
    } else {
        $array = $xml;
    }

    $newArray = array();
    $array = ( array )$array;
    foreach ($array as $key => $value) {
        $value = ( array )$value;
        if (isset ($value [0])) {
            $newArray [$key] = trim($value [0]);
        } else {
            $newArray [$key] = XML2Array($value, true);
        }
    }
    return $newArray;
};


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
function sqlQuery($table, $column, $where='1=1')
{
    $pdo = connectDatabase('projects2');
    $query = "SELECT $column FROM $table WHERE $where";
    try {
        $sql = $query;
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        die('Er is een probleem met ophalen van de plaatjes: ' . $e->getMessage());
    }
    $array = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         return $row[$column];
    }

}


//Cut string in 2 stukken in het midden.
//ripped functie
//nog niet getest
function CutStringInHalf($text)
{
    $text = "The Quick : Brown Fox Jumped Over The Lazy / Dog";

    $splitstring1 = substr($text, 0, floor(strlen($text) / 2));
    $splitstring2 = substr($text, floor(strlen($text) / 2));

    if (substr($splitstring1, 0, -1) != ' ' AND substr($splitstring2, 0, 1) != ' ') {
        $middle = strlen($splitstring1) + strpos($splitstring2, ' ') + 1;
    } else {
        $middle = strrpos(substr($text, 0, floor(strlen($text) / 2)), ' ') + 1;
    }

    $string1 = substr($text, 0, $middle);  // "The Quick : Brown Fox Jumped "
    $string2 = substr($text, $middle);  // "Over The Lazy / Dog"

    return array($string1, $string2);
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
    die('Er is een probleem met ophalen van de plaatjes: ' . $e->getMessage());
}
