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
			
			<title>Ajout appel d'offre</title>
		</head>
		<body>
		<div class="container mt-4">
			<a href="adminTechnique.php">Retour au menu</a>
			<a href="deconnexion.php" class="ml-5">Déconnexion</a>
		</div>
		<div class="containter">
			<div class="row">
				<div class="col-6 m-auto">
					<form method="post" action="#" enctype="multipart/form-data">
						<div class="form-group">
							<label for="intitule">Intitulé: </label>
							<input id="intitule" type="text" class="form-control" name="intitule" required>
						</div>
						<div class="form-group">
							<label for="fichier">Fichier: </label>
							<input id="fichier" type="file" class="form-control-file" name="fichier" required>
						</div>
						<button class="btn btn-outline-success" type="submit">Envoyer</button>
					</form>
				</div>
			</div>
		</div>
		<?php
			if(isset($_FILES["fichier"]) AND $_POST["intitule"] AND $_FILES['fichier']["error"]==0){
					move_uploaded_file($_FILES["fichier"]["tmp_name"],"uploads/".basename($_FILES['fichier']['name']));
					require "bdd.php";
					$bdd=$GLOBALS["bdd"];
					$response=$bdd->prepare("INSERT INTO appel_offre (intitule,file,dateAppel) VALUES (:intitule,:file,:date)");
					$response->execute(array(
					        "intitule"=>$_POST['intitule'],
                            "file"=>"./uploads/".basename($_FILES['fichier']['name']),
                            "date"=>date("Y-m-d")
                    ));
					header("Location:appelsOffres.php");
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