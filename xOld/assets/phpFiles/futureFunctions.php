<?php
include 'functions.php';
function grab_all_pages (){
    $conn = SnConn();
    $query = mysql_query("SELECT * FROM `pages` ORDER BY menu_order")or die("SQL ERROR 2.1".mysql_error());
    $i=1;
    $lim=";";
    $array = array('num' => mysql_num_rows($query));

    while ($i<=mysql_num_rows($query)) {
        $build = mysql_fetch_array($query, MYSQL_ASSOC);
        //$cleaned = array ('id' => $array[0], 'username' => $array[1]);
        $array[$i] = $build; //BUILDING ARRAY
        $i++;
    }
    return $array;
}

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

function GetSlider()
{
    $pdo = connectDatabase('projects2');
    $query = "SELECT * FROM slider WHERE 1=1"; // WHERE ACTIVE = 1?
    try {
        $result = $pdo->query($query);
    } catch (PDOException $e) {
        die('Er is een probleem met ophalen van de plaatjes: ' . $e->getMessage());
    }
    $array = $result->fetchAll();
    $array['num'] = $result->rowCount($query);
    return $array;
}

print_r(GetSlider());
$pages = grab_all_pages();

 $i=0; while ($pages['num']>=$i) { $i++;
    if($pages[$i]['type']!=2) { //tmp added for intro exception
        ?>
        <li class="nav-item">
            <a class="nav-link" href="#"><?=$pages[$i]['title'];?></a>
        </li>
    <?php } } ?>