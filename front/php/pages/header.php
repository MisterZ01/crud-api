<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gestion de bibliothèque</title>
    <script src="fichiers/dt/jquery-3.5.1.js"></script>
    <script src="fichiers/dt/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="fichiers/dt/jquery.dataTables.min.css">
    <link rel="stylesheet" href="fichiers/css/bootstrap.min.css">
    <link rel="stylesheet" href="fichiers/css/style.css">
     <script src="fichiers/js/bootstrap.min.js"></script>
     <script src="fichiers/js/javascript.js"></script>


</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="accueil.php" class="navbar-brand"><img src="fichiers/images/logo.png" alt="" width="150px" height="50px" srcset=""></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">parametrage</a>
                    <div class="dropdown-menu">
                        <a href="liste-classe.php" class="dropdown-item">Classe</a>
                        <a href="liste-livre.php" class="dropdown-item">Livre</a>
                        <a href="importation.php" class="dropdown-item">Importation</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">saisie</a>
                    <div class="dropdown-menu">
                        <a href="inscription.php" class="dropdown-item">Inscription</a>
                        <a href="emprunt.php" class="dropdown-item">Emprunt de livre</a>
                        <a href="liste-depot.php" class="dropdown-item">Depot de livre</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">edition</a>
                    <div class="dropdown-menu">
                        <a href="Listedesclasse.php" class="dropdown-item">Liste de classe</a>
                        <a href="livreparauteur.php" class="dropdown-item">Livre par auteur</a>
                        <a href="enmpruntparperiode.php" class="dropdown-item">Liste des emprunts par periode</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Gestion panneaux</a>
                    <div class="dropdown-menu">
                        <a href="gestionclient.php" class="dropdown-item"> lecture et suppression clients </a>
                        <a href="gestioncontrat.php" class="dropdown-item">lecture et suppression contrats</a>
                        <a href="gestionpanneau.php" class="dropdown-item">lecture et suppression panneaus</a>
                    </div>
                </div>

            </div>
            <div style="margin-left: 60%; background-color:red; color:aliceblue; text-decoration:none;">
                    <a style="background-color:red; color:aliceblue; text-decoration:none;" class="nav-link" href="auth/deconnexion.php" >Se déconnecter</a>
                </div>
        </div>
    </nav>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#matable').DataTable( {
            search: {
                return: true
            },
            select: true,
            language: {
                url:"fichiers/dt/datatables.french.js",

            }
        } );
    } );
</script>
</html>