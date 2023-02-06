<?php
try {

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);
 }
 catch(PDOException $e){
    echo 'Impossible de se connecter à la base de données. Erreur : '.$e->getMessage();
}
?>