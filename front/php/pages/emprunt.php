<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> emprunter un livre</title>
    <link rel="stylesheet" href="fichiers/css/bootstrap.min.css">
    <link rel="stylesheet" href="fichiers/css/style.css">
    <script src="fichiers/js/bootstrap.min.js"></script>
    <script src="fichiers/js/jquery.min.js"></script>
    <script src="fichiers/js/javascript.js"></script>
    <style>

    </style>


</head>

<body>
    <?php include('header.php'); ?>

    <form action="traitementEmprunt.php" method="post">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">EMPRUNT DE LIVRE</h3>
                                <form>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="firstName" class="form-control form-control-lg" name="matriculeEmprunteur" />
                                                <label class="form-label" for="firstName">Matricule de l'emprunteur</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="lastName" class="form-control form-control-lg" name="codeLivre" />
                                                <label class="form-label" for="lastName">code du livre </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="date" id="firstName" class="form-control form-control-lg" name="dRetour" />
                                                <label class="form-label" for="firstName">Date de sortie</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="date" id="lastName"  class="form-control form-control-lg" name="dSortie"/>
                                                <label class="form-label" for="lastName">Date de retour</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-4 pt-2 justify-content-center text-center">
                                        <input class="btn btn-primary btn-lg" type="submit" name="bntEmprunt" value="Enregistrer l'emprunt" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>