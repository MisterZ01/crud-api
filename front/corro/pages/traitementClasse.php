<?php

// enregistrement pour emprunt de livre

if(isset($_POST["bntClasseValider"])){

    $codeClase = trim(stripslashes($_POST['codeClase']));
    $libelleClasse = trim(stripslashes( $_POST['libelleClasse']));
}
try{
    //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);


    //On insère les données reçues
    $requete = $conn->prepare("
        INSERT INTO classe(codeCl, LibelleCl)
        VALUES(:codeCl, :LibelleCl)");
        $requete->bindParam(':codeCl',$codeClase);
        $requete->bindParam(':LibelleCl',$libelleClasse);
         $requete->execute();

}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}
header("Location:liste-classe.php");

