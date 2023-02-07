<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gestion des panneaux</title>
    <link rel="stylesheet" href="fichiers/css/bootstrap.min.css">
    <link rel="stylesheet" href="fichiers/css/style.css">
    <script src="fichiers/js/bootstrap.min.js"></script>
    <script src="fichiers/js/jquery.min.js"></script>
    <script src="fichiers/js/javascript.js"></script>



</head>

<body>
    <?php
        include('header.php');
        include('gestioncontratback.php');
        // include('recupbd.php');


        ?>
    <div class="text-center">
        <p>La liste des contrats </p>
    </div>
 <div class="container text-center justify-content-center">
        <div class="row">
            <div class="col-12">
            <table class="table table-bordered"  id="matable">
                <thead>
                <tr>
                    <th scope="col">date de debut du contrat</th>
                    <th scope="col">date de fin du contrat</th>
                    <th scope="col">contractant</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $contrats as $contrat ):     ?>
                     <tr>
                            <td> <?= $contrat->dateDebut_contrat ?> </td>
                            <td> <?= $contrat->dateFin_contrat ?></td>
                            <td> <?= $contrat->contractant ?></td>
                            <td>
                                <?php
                                 echo ' <form action="gestioncontratback.php" method="POST"><input type="hidden"  name="id_contrat" value='.$contrat->id.' >
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