<?php

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


   </body>
</html>