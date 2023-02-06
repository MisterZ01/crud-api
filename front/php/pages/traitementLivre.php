<?php

//Importation de livre

if(isset($_POST["bntImport"])){

    $titreLivre = trim(stripslashes($_POST['titreLivre']));
    $codeLivre = trim(stripslashes($_POST['codeLivre']));
    $auteur = trim(stripslashes( $_POST['auteurLivre']));
    $genre =trim(stripslashes($_POST['genre']));
    $date = new DateTime();
    $today = $date->format('Y-m-d H:i:s');
}
try{
    //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);


    //On insère les données reçues
    $requete = $conn->prepare("
        INSERT INTO livre(codeL,titreL, auteurL, genre, dateCreation)
        VALUES(:codeL, :titreL,:auteurL, :genre,:dateCreation)");
    $requete->bindParam(':codeL',$codeLivre);
    $requete->bindParam(':titreL',$titreLivre);
    $requete->bindParam(':auteurL',$auteur);
    $requete->bindParam(':genre',$genre);
    $requete->bindParam(':dateCreation',$today);
    $requete->execute();
    echo $today;


}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}
header("Location:liste-livre.php");


