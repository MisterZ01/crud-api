<?php


try{
    //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);
    //On recupere les livres importés dans la base de données
    $requeteLivres = "SELECT * FROM livre ";
    $recuplivres = $conn->query($requeteLivres);
    if ($recuplivres != FALSE) {
        $livres = $recuplivres->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "impossible de recuperer les livres importés";
    }
    //On recupere les livres empruntés dans la base de données
    $requetelivresEmprentes = "SELECT * FROM emprunter ";
    $recuplivresemprunter = $conn->query($requetelivresEmprentes);
    if ($recuplivresemprunter !== FALSE) {
        $livresempruntes = $recuplivresemprunter->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "impossible de recuperer les livres empruntés";
    }
    //On recupere les classes dans la base de données
    $requeteclasse = "SELECT * FROM classe ";
    $recupclasse = $conn->query($requeteclasse);
    if ($recupclasse !== FALSE) {
        $Classes = $recupclasse->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "impossible de recuperer les livres empruntés";
    }
}
catch(PDOException $e){
    echo 'Impossible de recuperer les données. Erreur : '.$e->getMessage();
}

