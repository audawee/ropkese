<?php
if(isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost:8080;dbname=user', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Létezik már a felhasználói név?
        $sqlSelect = "select id from username where login = :login";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':login' => $_POST['username']));
        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        }
        else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into users(id, _lastname, _firstname, _username, _email, _password)
                          values(0, :lastname, :firstname, :username, :password)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':lastname' => $_POST['lastname'], ':firstname' => $_POST['firstname'],
                                 ':username' => $_POST['username'], ':password' => sha1($_POST['password']))); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                $ujra = false;
            }
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }      
}
else {
    header("Location: .");
}
?>