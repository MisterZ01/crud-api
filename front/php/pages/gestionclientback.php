<?php

// recuperation des donnees

$clients = json_decode(file_get_contents('http://127.0.0.1:8000/api/client/all'));

// suppression des donnees

if(isset($_POST['supprimer'])){
    
    $data = $_POST['id_client'];
    $url = "http://127.0.0.1:8000/api/client/delete/".$data;
    // $result = CallAPI('DELETE', "client/delete/", $data);
    // var_dump($result);
    // die();
    // curl_del($path);
    // $url = "https://api.mywebtuts.com/api/users/2";
  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
    $result = curl_exec($ch);
    $result = json_decode($result);
  
    curl_close($ch);
  
    header('location:gestionclient.php');



    
}


















// function perform_http_request($method, $url, $data = false) {
//     $curl = curl_init();

//     switch ($method) {
//         case "POST":
//             curl_setopt($curl, CURLOPT_POST, 1);

//             if ($data) {
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// 			}

//             break;
//         case "PUT":
//             curl_setopt($curl, CURLOPT_PUT, 1);

//             break;
//         default:
//             if ($data) {
//                 $url = sprintf("%s?%s", $url, http_build_query($data));
// 			}
//     }

//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //If SSL Certificate Not Available, for example, I am calling from http://localhost URL

//     $result = curl_exec($curl);

//     curl_close($curl);

//     return $result;
// }

// $rest_api_base_url = 'http://127.0.0.1:8000/api/';

// //GET - list of users
// $get_endpoint = 'client/all';

// $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint);
// $clients = $response ;

// foreach( $el as $response ){
//     echo '$el' . "\n";

// }



// $url = 'http://127.0.0.1:8000/api/client/all';

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $clients = curl_exec($ch);
// $clients = json_decode($clients);

// var_dump($clients[0]);
// curl_close($ch);



// try{
//     //On se connecte à la BDD
//     $servername = 'localhost';
//     $username = 'root';
//     $password = 'root';
//     $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);
//     //On recupere les livres importés dans la base de données
//     $requeteLivres = "SELECT * FROM livre ";
//     $recuplivres = $conn->query($requeteLivres);
//     if ($recuplivres != FALSE) {
//         $livres = $recuplivres->fetchAll(PDO::FETCH_ASSOC);
//     } else {
//         echo "impossible de recuperer les livres importés";
//     }
//     //On recupere les livres empruntés dans la base de données
//     $requetelivresEmprentes = "SELECT * FROM emprunter ";
//     $recuplivresemprunter = $conn->query($requetelivresEmprentes);
//     if ($recuplivresemprunter !== FALSE) {
//         $livresempruntes = $recuplivresemprunter->fetchAll(PDO::FETCH_ASSOC);
//     } else {
//         echo "impossible de recuperer les livres empruntés";
//     }
//     //On recupere les classes dans la base de données
//     $requeteclasse = "SELECT * FROM classe ";
//     $recupclasse = $conn->query($requeteclasse);
//     if ($recupclasse !== FALSE) {
//         $Classes = $recupclasse->fetchAll(PDO::FETCH_ASSOC);
//     } else {
//         echo "impossible de recuperer les livres empruntés";
//     }
// }
// catch(PDOException $e){
//     echo 'Impossible de recuperer les données. Erreur : '.$e->getMessage();
// }

