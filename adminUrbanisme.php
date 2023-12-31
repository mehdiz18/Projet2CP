<?php
	session_start();
	if(isset($_SESSION['username'])){
		?>
      <!doctype html>
      <html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="Style/adminPages.css">
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

          <title>Administartion Service Urbanisme</title>
      </head>
      <body>
        <div class="container">
            <a href="deconnexion.php">Déconnexion</a>
        </div>
      <div class="containter btn-box">
          <div class="row mx-auto">
              <div class="col-12">
                  <button class="btn btn-primary">
                      <a href="formulaireUrbanisme.php" class="mylink stretched-link">Demandes actes urbanisme</a>
                  </button>
              </div>
              <div class="col mt-5">
                  <button class="btn btn-primary">
                      <a href="messagerieUrbanisme.php" class="mylink stretched-link">Messagerie Service urbanisme</a>
                  </button>
              </div>
          </div>
      </div>

      <!-- Optional JavaScript; choose one of the two! -->
      <script src="Js/urbanisme.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      </body>
      </html>
		<?php
	}else{
		header('Location:admin.php');
	}