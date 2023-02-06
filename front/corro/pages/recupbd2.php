<?php


try{
    //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);

    //On recupere les classes dans la base de données
    // SELECT nom, age FROM table GROUP BY nom, age HAVING COUNT(*) > 1
    $requeteclasse = "SELECT * FROM etudiant GROUP BY codeCl HAVING COUNT(*) >= 1";
    $recupclasse = $conn->query($requeteclasse);
    if ($recupclasse !== FALSE) {
        $Classes = $recupclasse->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "impossible de recuperer les livres empruntés";
    }
    //On recupere les livres dans la base de données
    // SELECT nom, age FROM table GROUP BY nom, age HAVING COUNT(*) > 1
    $requetelivre = "SELECT * FROM livre GROUP BY codeL HAVING COUNT(*) >= 1";
    $recuplivre = $conn->query($requetelivre);
    if ($recuplivre !== FALSE) {
        $livres = $recuplivre->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "impossible de recuperer les livres empruntés";
    }
}
catch(PDOException $e){
    echo 'Impossible de recuperer les données. Erreur : '.$e->getMessage();
}

