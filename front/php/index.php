<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      include("pages/auth/connexion.php");
      $sel=$pdo->prepare("select * from utilisateurs where login=? and pass=? limit 1");
      $sel->execute(array($login,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
         " ".strtoupper($tab[0]["nom"]);
         $_SESSION["autoriser"]="oui";
         header("location:pages/accueil.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
?>
<!DOCTYPE html>
<html>
     <head>
      <meta charset="utf-8" />
      <title>Gestion de bibliothèque</title>
      <link rel="stylesheet" href="pages/fichiers/css/bootstrap.min.css">
      <link rel="stylesheet" href="pages/fichiers/css/style.css">
      <script src="pages/fichiers/js/bootstrap.min.js"></script>
      <script src="pages/fichiers/js/jquery.min.js"></script>
      <script src="pages/fichiers/js/javascript.js"></script>

        <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
         a{
            font-size:12pt;
            color:#EE6600;
            text-decoration:none;
            font-weight:normal;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
   <body onLoad="document.fo.login.focus()">
   <?php include('pages/headerpro.php');?>


     <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="fichiers/images/bg1.jpg" alt="" />
                <h3>Bienvenue</h3>
                <p>Empruntez les meilleur livre de toutes les tendances</p>
                  <button class="btn btn-danger text-white"><a class="text-white" href="pages/auth/inscription.php">S'INSCRIRE</a><br/>
</button>
            </div>
            <div class="col-md-9 register-right">
            <form name="fo" action="" method="post">
               <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <h3 class="register-heading">CONNEXION</h3>
                           <div class="row register-form">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="login" placeholder="Matricule *"/>
                                 </div>

                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="password" class="form-control" name="pass" placeholder="Mot de passe *"/>
                                 </div>
                                 <div class="erreur"><?php echo $erreur ?></div>

                                 <input type="submit" class="btnRegister"  name="valider" value="CONNEXION" />
                              </div>
                           </div>
                     </div>

               </div>
            </form>
            </div>
        </div>

    </div>
   </body>
</html>