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
<?php include('header.php');include('recupbd.php');?>

    <div class="container text-center justify-content-center">
        <div class="row  text-center justify-content-center">
            <div class="col-8 mx-auto p-2">
                <form action="traitementClasse.php" method="post">
                    <div class="col-12 p-3 text-center justify-content-center">
                        <div class="row text-center justify-content-center">
                            <label class="form-label" for="firstName">Code</label>
                            <div class="col-md-6 mb-4 d-flex">
                                <div class="form-group">
                                    <input type="text" id="firstName" class="form-control form-control" name="codeClase" required/>
                                </div>
                                <div class="form-outline ml-2">
                                    <input class="btn btn-primary bt-lg" type="submit" name="bntClasseValider" value="Valider" />
                                </div>
                            </div>
                        </div>
                        <div class="row text-center justify-content-center">
                            <label class="form-label" for="lastName">Libelle </label>
                            <div class="col-md-6 mb-4 d-flex">
                                <div class="form-group">
                                    <input type="text" id="lastName" class="form-control form-control" name="libelleClasse" required />
                                </div>
                                <div class="form-outline ml-2">
                                    <input class="btn btn-primary bt-lg" type="submit" name="bntClassequitter" value="Quitter" />
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <div class="form-outline ml-2">
                    <a class="btn btn-primary bt-lg" href="exporterclasse.php" >exporter la liste</a>
                </div>
                <table class="table table-bordered " id="matable">
                    <thead class="bg-warning">
                    <tr>
                        <th scope="col">code de la classe</th>
                        <th scope="col">libele de la classe</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach( $Classes as $Classe):     ?>
                        <tr>
                            <td> <?php echo $Classe["codeCl"] ?></td>
                            <td> <?php echo $Classe["LibelleCl"] ?></td>
                        </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>