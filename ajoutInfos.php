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

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

          <title>Ajout actualité</title>
      </head>
      <body>
      <div class="container mt-4">
          <a href="adminInfos.php">Retour au menu</a>
          <a href="deconnexion.php" class="ml-5">Déconnexion</a>
      </div>
      <div class="containter">
          <div class="row">
              <div class="col-6 m-auto">
                  <form method="post" action="#" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="titre">Titre: </label>
                          <input id="tire" type="text" class="form-control" name="titre" required>
                      </div>
                      <div class="form-group">
                          <label for="image">Image: </label>
                          <input id="image" type="file" class="form-control-file" name="image" required>
                      </div>
                      <div class="form-group">
                          <label for="resume">Résumé: </label>
                          <textarea id="resume" type="file" class="form-control-file" name="resume" required rows="10"></textarea
                      </div>
                      <div class="form-group">
                          <label for="contenu">Article: </label>
                          <textarea id="contenu" type="file" class="form-control-file" name="contenu" required rows="30"
                          ></textarea
                      </div>
                      <button class="btn btn-outline-success" type="submit">Envoyer</button>
                  </form>
              </div>
          </div>
      </div>
			<?php
				if(isset($_POST["titre"]) AND isset($_FILES["image"]) AND $_POST["contenu"] AND
                  $_FILES['image']["error"]==0){
				    require "bdd.php";
				    $bdd=$GLOBALS["bdd"];
					move_uploaded_file($_FILES["image"]["tmp_name"],"./uploads/".basename($_FILES['fichier']['name']));
					$response=$bdd->prepare("INSERT INTO info (titre,contenu,image,resume) VALUES (:titre,:contenu,:image,:resume)");
					$response->execute(array(
						"titre"=>$_POST['titre'],
                        "contenu"=>$_POST["contenu"],
						"resume"=>$_POST["resume"],
						"image"=>"uploads/".basename($_FILES['image']['name'])
					));
					header("Location:listeInfos.php");
				}
			?>
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