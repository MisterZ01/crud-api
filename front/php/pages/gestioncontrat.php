<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gestion de bibliothèque</title>
    <link rel="stylesheet" href="fichiers/css/bootstrap.min.css">
    <link rel="stylesheet" href="fichiers/css/style.css">
    <script src="fichiers/js/bootstrap.min.js"></script>
    <script src="fichiers/js/jquery.min.js"></script>
    <script src="fichiers/js/javascript.js"></script>



</head>

<body>
    <?php
        include('header.php');
        // include('recupbd.php');


        ?>
    <div class="text-center">
        <p>La liste des livres empruntés</p>
    </div>
 <div class="container text-center justify-content-center">
        <div class="row">
            <div class="col-12">
            <table class="table table-bordered"  id="matable">
                <thead>
                <tr>
                    <th scope="col">Nom du client</th>
                    <th scope="col">Prenom du client</th>
                    <th scope="col">Numero du client</th>
                    <th scope="col">email du client</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $clients[0] as $client):     ?>
                     <tr>
                            <td> <?php echo$client["nom_client"]?> </td>
                            <td> <?php echo$client["prenom_client"]?></td>
                            <td> <?php echo$client["numero_client"]?></td>
                            <td><?php echo$client["email_client"]?></td>

                            <td>
                                <?php
                                 echo ' <form action="gestionclientback.php" method="POST"><input type="hidden"  name="id_client" value='.$client["id"].' >
                                <input type="submit" class="btn btn-success"  name="supprimer" value="supprimer"></form> '
                                ?>
                            </td>

                    </tr>

                 <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

</body>
</html>