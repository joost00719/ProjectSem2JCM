<?php


$xmlSliderContent=XML2Array('assets/xml/sliderContent.xml');
$xmlSlideText=XML2Array('assets/xml/sliderText.xml');
$xmlConfig=XML2Array('assets/xml/config.xml');
$xmlArticle=XML2Array('assets/xml/articles.xml');



//functions

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

function redirect($par)
{
    header("location: $par");
}