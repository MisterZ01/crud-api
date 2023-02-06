<?php

// enregistrement de nouveaux etudant

if(isset($_POST["submit"])){

    $nom = trim(stripslashes($_POST['nom']));
    $prenom = trim(stripslashes($_POST['prenom']));
    $classe = trim(stripslashes( $_POST['classe']));
    $photo =trim(stripslashes($_POST['photo']));
    $matricule = trim(stripslashes($_POST['matricule']));
    $sexe = trim(stripslashes($_POST['sexe']));
    $date_de_naissance = trim(stripslashes($_POST['date_de_naissance']));
    $lieu_de_naissance = trim(stripslashes($_POST['lieu_de_naissance']));



try{
    //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);


    //On insère les données reçues
    $requete = $conn->prepare("
        INSERT INTO etudiant(nom,prenom, codeCl, photo, sexe, matricule,dnais,lieux)
        VALUES(:nom,:prenom, :codeCl, :photo, :sexe, :matricule, :dnais , :lieux)");
    $requete->bindParam(':nom',$nom);
    $requete->bindParam(':prenom',$prenom);
    $requete->bindParam(':codeCl',$classe);
    $requete->bindParam(':photo',$photo);
    $requete->bindParam(':sexe',$sexe);
    $requete->bindParam(':matricule',$matricule);
    $requete->bindParam(':dnais',$date_de_naissance);
    $requete->bindParam(':lieux',$lieu_de_naissance);
    $requete->execute();


}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}
header("Location:accueil.php");

}

// enregistrement pour emprunt de livre

if(isset($_POST["btnEmprunt"])){

    $matriculeEmprunteur = trim(stripslashes($_POST['matriculeEmprunteur']));
    $codeLivre = trim(stripslashes($_POST['codeLivre']));
    $dSortie = trim(stripslashes( $_POST['dSortie']));
    $dRetour =trim(stripslashes($_POST['dRetour']));

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


}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}
header("Location:accueil.php");

}
//Importation de livre

if(isset($_POST["btnImport"])){

    $titreLive = trim(stripslashes($_POST['titreLive']));
    $codeLivre = trim(stripslashes($_POST['codeLivre']));
    $auteur = trim(stripslashes( $_POST['auteur']));
    $genre =trim(stripslashes($_POST['genre']));
}
try{
    //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);
    echo " ok";


    //On insère les données reçues
    $requete = $conn->prepare("
        INSERT INTO livre(codeL,titreL, auteurL, genre)
        VALUES(:codeL, :titreL,:auteurL, :genre)");
    $requete->bindParam(':codeL',$codeLivre);
    $requete->bindParam(':titreL',$titreLive);
    $requete->bindParam(':auteurL',$auteur);
    $requete->bindParam(':genre',$genre);
    $requete->execute();


}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}
header("Location:popup.php");

