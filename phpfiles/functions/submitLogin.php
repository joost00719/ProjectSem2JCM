<?php
//somehow werkt deze spagetthi code een beetje?
require "functions.php";
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['kleur']) && isset($_POST['type'])) {
    $type = $_POST['type'];
    $username = $_POST['name'];
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    $password = encryptor($_POST['password'], $_POST['kleur']);

    print_r(sqlQuery("SELECT hash FROM beheerder WHERE naam = '$username'"));
    if($type == 'login'){
        if ($password == sqlQuery("SELECT hash FROM beheerder WHERE naam = '$username'")[0]['hash']){
            $_SESSION['loggedin'] = true;
            $_SESSION['naam'] = $username;
        }
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        if($type = 'register'){
            sqlRegistreer($username, $password, $email);
        }
    }
}

function sqlRegistreer($username, $password, $email){

    try {
//INSERT INTO `beheerder` (`beheerderID`, `naam`, `gebruikersnaam`, `hash`, `salt`, `email`)
// VALUES ('', 'meow', 'username', 'hash', NULL, 'email')
        $identity = (sqlQuery("SELECT COUNT('*') + 1 FROM beheerder"));
        $identity = ($identity[0][0]);
        $sql = "INSERT INTO beheerder (beheerderID, naam, gebruikersnaam, hash, email) VALUES (:userid, :username, :username, :password, :email);";
        //het statement wordt toegevoegd aan een pdo statement object
        $pdo = connectDatabase('festival');
        $s = $pdo->prepare($sql);

        //koppelen van parameters in de query string met de te inserten waardes
        $s->bindValue(':userid', $identity[0], PDO::PARAM_INT);
        $s->bindValue(':username', $username, PDO::PARAM_STR);
        $s->bindValue(':password', $password, PDO::PARAM_STR);
        $s->bindValue(':email', $email, PDO::PARAM_STR);
        //Nu kan de query worden uitgevoerd
        $s->execute();
    }
    catch (PDOException $e)
    {
        die('Fout bij het wijzigen van een rij: ' . $e->getMessage());

    }

}

//header("location: ../../index.php");
?>
