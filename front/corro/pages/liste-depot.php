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
        include('recupbd.php');
        include('headerpro.php');

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
                    <th scope="col">code livre</th>
                    <th scope="col">matricule emprunteur</th>
                    <th scope="col">Date de sortie</th>
                    <th scope="col">Date de retour</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $livresempruntes as $livresemprunte):     ?>
                     <tr>
                            <td> <?php echo$livresemprunte["codeL"]?> </td>
                            <td> <?php echo$livresemprunte["matricule"]?></td>
                            <td> <?php echo$livresemprunte["dateSortie"]?></td>
                            <td><?php echo$livresemprunte["dateRetour"]?></td>

                            <td>
                                <?php
                                 echo ' <form action="supprimeremprunt.php" method="POST"><input type="hidden"  name="codeL" value='.$livresemprunte["codeL"].' >
                                <input type="submit" class="btn btn-success"  name="del" value="Déposer"></form> '
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