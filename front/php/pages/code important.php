<html>

<head>
    <title> </title>
</head>

<body>

    <?php

// Création du DSN

$dsn = 'mysql:host=localhost;dbname=commerce;port=3306;charset=utf8';

// Création et test de la connexion

try {

$pdo = new PDO($dsn, 'root' , '');

}
catch (PDOException $exception) {

 mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
 exit('Erreur de connexion à la base de données');

}

// Requête pour tester la connexion

$query = $pdo->query("SELECT * FROM `clients` WHERE `gender` LIKE 'male'");

$resultat = $query->fetchAll();

//Afficher le résultat dans un tableau

print("<table border=\"1\">");

foreach ($resultat as $key => $variable)
{
print("<tr>");
print("<td>".$resultat[$key]['gender']."</td>");
print("<td>".$resultat[$key]['title']."</td>");
print("<td>".$resultat[$key]['givenname']."</td>");
print("<td>".$resultat[$key]['surname']."</td>");
print("<tr>");
}

print("</table>");

?>

</body>

</html>