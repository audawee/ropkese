<?php
if(isset($_POST['felhasznalo/email']) && isset($_POST['jelszo'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost:8080;dbname=user', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select id, lastname, firstname from users where login = :login and jelszo = sha1(:password)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':login' => $_POST['username'], ':password' => $_POST['password']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['ln'] = $row['_lastname']; $_SESSION['fn'] = $row['_firstname']; $_SESSION['_username'] = $_POST['_email'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
