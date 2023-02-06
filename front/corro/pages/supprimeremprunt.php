<?php


if (isset($_POST['del'])){
    $code = $_POST['codeL'];

     require_once "connexionbd.php";
    $req = "DELETE FROM emprunter WHERE codeL='$code'";

    if ($conn->query($req) !== FALSE) {
        echo " bien joué";
    } else {
        echo "erreur";
    }
    //header("Location:liste-depot.php");
}

