<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gestion de bibliothèque</title>


    <link rel="stylesheet" href="fichiers/css/style.css">
     <script src="fichiers/js/javascript.js"></script>


</head>

<body>
    <?php
        include('header.php');
          //On se connecte à la BDD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);


    //On les livres importés dans la base de données
    $requeteLivres = "SELECT * FROM livre  ORDER BY dateCreation DESC";
    $recuplivres = $conn->query($requeteLivres);
    if ($recuplivres != FALSE) {
        $livres = $recuplivres->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "impossible de recuperer les livres importés";
    }
        ?>
    <div class="text-center bg-light" style="margin: 2%;">
        <h3>La liste des livres disponible dans la bibliothèque</h3>
    </div>

    <div class="container text-center justify-content-center">
        <div class="row">
            <div class="col-8">
            <div class="form-outline ml-2">
                <a class="btn btn-primary bt-lg" href="exporterlivre.php" >exporter la liste</a>
            </div>
                <table class="table table-bordered" id="matable">
                    <thead class="bg-warning">
                    <tr>
                        <th scope="col">code livre</th>
                        <th scope="col">libele livre</th>
                        <th scope="col">auteur</th>
                        <th scope="col">genre</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach( $livres as $livre):     ?>
                    <tr>
                        <td> <?php echo $livre["codeL"] ?></td>
                        <td> <?php echo $livre["titreL"] ?></td>
                        <td> <?php echo $livre["auteurL"] ?></td>
                        <td> <?php echo $livre["genre"] ?></td>

                        <td>
                        <button type="button" class="btn btn-success"><i class="fas fa-user">telecharger</i></button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
            <div class="col-4 bg-primary">
                <form action="traitementLivre.php" method="post">
                    <h5 class="pb-2 pb-md-0 mb-md-5">ENREGISTREMENT DE LIVRE</h5>
                    <div class="col-12 text-center justify-content-center">
                        <div class="row text-center justify-content-center">
                            <label class="form-label" for="firstName">Titre Livre</label>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" id="firstName" class="form-control form-control" name="titreLivre" required />
                                </div>
                            </div>
                        </div>
                        <div class="row text-center justify-content-center">
                            <label class="form-label" for="firstName">Code Livre</label>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" id="firstName" class="form-control form-control" name="codeLivre" required />
                                </div>
                            </div>
                        </div>
                        <div class="row text-center justify-content-center">
                            <label class="form-label" for="firstName">Auteur Livre</label>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" id="firstName" class="form-control form-control" name="auteurLivre" required />
                                </div>
                            </div>
                        </div>
                        <div class="row text-center justify-content-center">
                            <label class="form-label" for="firstName">Genre Livre</label>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="select form-control" name="genre" required>
                                        <option value="1" >Genre</option>
                                        <option value="#"disabled>-------</option>
                                        <option value="Roman">Roman</option>
                                        <option value="Nouvelle">Nouvelle</option>
                                        <option value="poetique">poetique</option>
                                        <option value="Recit">Recit</option>
                                    </select>                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-2 justify-content-center text-center">
                            <input class="btn btn-success btn" type="submit" name="bntImport" value="Enregistrer" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>