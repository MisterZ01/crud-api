<?php

// recuperation des donnees

$clients = file_get_contents('http://127.0.0.1:8000/api/client/all');
$clients = json_decode($clients);

// suppression des donnees

function CallAPI($method, $api, $data) {
    $url = "http://127.0.0.1:8000/api/" . $api;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    switch ($method) {
        case "GET":
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            break;
        case "POST":
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            break;
        case "DELETE":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            break;
    }
    $response = curl_exec($curl);
    $data = json_decode($response);

    /* Check for 404 (file not found). */
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    // Check the HTTP Status code
    switch ($httpCode) {
        case 200:
            $error_status = "200: Success";
            return ($data);
            break;
        case 404:
            $error_status = "404: API Not found";
            break;
        case 500:
            $error_status = "500: servers replied with an error.";
            break;
        case 502:
            $error_status = "502: servers may be down or being upgraded. Hopefully they'll be OK soon!";
            break;
        case 503:
            $error_status = "503: service unavailable. Hopefully they'll be OK soon!";
            break;
        default:
            $error_status = "Undocumented error: " . $httpCode . " : " . curl_error($curl);
            break;
    }
    curl_close($curl);
    echo $error_status;
    die;
}


if(isset($POST['supprimer'])){

    $data = array('id'=>$POST['id_client']);
    $result = CallAPI('DELETE', "client/", $data);
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

