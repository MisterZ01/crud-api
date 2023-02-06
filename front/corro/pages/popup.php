<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>succes</title>
     <link rel="stylesheet" href="fichiers/popup/bootstrap.min.css">
     <script src="fichiers/popup/jquery.min.js"></script>
    <script src="fichiers/popup/bootstrap.min.js"></script>
    <style>
    body{
        background-image:url('fichiers/images/biblio.png');
        background-size: cover;
    }
    </style>
</head>
<body>

<div class="container text-center justify-content-center">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content text-center justify-content-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enregistrement reussi</h4>
        </div>
        <div class="modal-body text-center justify-content-center">
            <img src="fichiers/images/success.png" alt="sucess logo" width="60px" height="60px" srcset="">
            <p>l'operation d'enregistrement est un succes</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" href="accueil.php">fermer</a>
        </div>
      </div>

    </div>
  </div>

</div>
</body>
<script>
    $(window).load(function()
{
    $('#myModal').modal('show');
});
</script>
</html>