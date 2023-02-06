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
    <?php include('accueil.php'); ?>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
            <img src="fichiers/images/logo.png" alt=""  srcset="">                <h3>Bienvenue</h3>
                <p>Empruntez les meilleur livre de toutes les tendances</p>
                <a  class="btn btn-primary" href="../index.php" >SE CONNECTER</a><br/>
            </div>
        <div class="col-md-9 register-right">
        <form action="traitement.php" method="post">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading"> ENREGISTREMENT</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prenom *" name="prenom" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom *" name="nom" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="date_de_naissance *"  name="date_de_naissance" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="photo *" name="photo" value="" />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Matricule *" name="matricule" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text"  placeholder="classe *" name="classe" class="form-control" placeholder="Date de naissance" value="" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Lieux de naissance" name="lieu_de_naissance" value="" />
                            </div>
                            <div class="form-group">
                            <select  id="color" name="sexe">
                                <option value="">--- sexe ---</option>
                                <option value="masculin">masculin</option>
                                <option value="feminin">feminin</option>
                            </select>
                            </div>
                            <input type="submit" name="submit" class="btnRegister" value="Enregistrer" />
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
        </div>

    </div>
</body>

</html>