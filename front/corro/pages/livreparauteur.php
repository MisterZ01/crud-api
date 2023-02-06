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
        include('recupbd2.php');

        ?>
        <br>
    <div class="text-center my-3">
        <h3>La liste des livres </h3>
    </div>
    <div class="container text-center justify-content-center">
        <div class="row">
            <div class="col-12">
            <table class="table table-bordered"  id="matable">
                <thead>
                <tr>
                    <!-- <th scope="col">Nombre d'elèves</th> -->
                    <th scope="col">Nom de l'Auteur</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $livres as $livre):     ?>
                <tr>
                    <td> <?php echo $livre["auteurL"] ?></td>
                    <td><?php echo ' <form action="" method="POST"><input type="hidden"  name="code" value='.$livre["auteurL"].' >
                                <input type="submit" class="btn btn-success" onclick="myFunction()"  name="del" value="Voir ses livres"></form> '?>
                     </td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <div id="myDIV"  >
            <table class="table table-bordered text-center "  id="matable">
                <?php $livre=''; if (isset($_POST['del'])){
                        $livre=$_POST['code'];
                        $req="SELECT * FROM livre WHERE auteurL='$livre'";
                        $etudiant = $conn->query($req);
                        $etudiants = $etudiant->fetchAll(PDO::FETCH_ASSOC);}?>
                <thead>
                        <h5>Liste des livres de <?php echo $livre ?> </h5>
                    <tr>
                    <th>Code livre </th>
                    <th>Tire livre</th>
                    <th>genre livre</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach( $etudiants as $etudiantsing):    ?>

                    <tr>
                    <td><?php echo $etudiantsing["codeL"] ?></td>
                    <td><?php echo $etudiantsing["titreL"] ?></td>
                    <td><?php echo $etudiantsing["genre"] ?></td>
                     </tr>
                </tbody>
                <?php endforeach ?>

            </table>
            </div>
        </div>


        </div>
    </div>
    <script >
        function myFunction() {
            var x = document.getElementById('myDIV');
            if (x.style.visibility === 'hidden') {
                x.style.visibility = 'visible';
            } else {
                x.style.visibility = 'hidden';
            }
            }
    </script>
</body>
</html>