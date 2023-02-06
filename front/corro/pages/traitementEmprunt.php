<?php

// enregistrement pour emprunt de livre

if(isset($_POST["bntEmprunt"])){

    $matriculeEmprunteur = trim(stripslashes($_POST['matriculeEmprunteur']));
    $codeLivre = trim(stripslashes($_POST['codeLivre']));
    $dSortie = trim(stripslashes( $_POST['dSortie']));
    $dRetour =trim(stripslashes($_POST['dRetour']));
}
try{
    //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);


    //On insère les données reçues
    $requete = $conn->prepare("
        INSERT INTO emprunter(matricule,codeL, dateSortie, dateRetour)
        VALUES(:matricule,:codeL, :dateSortie, :dateRetour)");
        $requete->bindParam(':matricule',$matriculeEmprunteur);
        $requete->bindParam(':codeL',$codeLivre);
        $requete->bindParam(':dateSortie',$dSortie);
        $requete->bindParam(':dateRetour',$dRetour);
        $requete->execute();
        echo " ok";

}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}
header("Location:popup.php");

