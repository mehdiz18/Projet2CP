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
			
			<title>Administartion Service Urbanisme</title>
		</head>
		<body>
        <div class="container mt-4">
            <a href="adminUrbanisme.php">Retour au menu</a>
            <a href="deconnexion.php" class="ml-5">Déconnexion</a>
        </div>
		<div class="containter">
			<div class="row">
				<div class="col-6 m-auto">
					<form method="post" action="#">
						<div class="form-group">
							<label for="name">Nom: </label>
							<input id="name" type="text" class="form-control" name="nom" required>
						</div>
						<div class="form-group">
							<label for="prenom">Prenom: </label>
							<input id="prenom" type="text" class="form-control" name="prenom" required>
						</div>
						<div class="form-group">
							<label for="localisation">Localisation </label>
							<input id="localisation" type="text" class="form-control" name="localisation" required>
						</div>
						<div class="form-group">
							<label for="nature">Nature de l'acte demandé: </label>
							<input id="nature" type="text" class="form-control" name="nature" required>
						</div>
						<div class="form-group">
							<label for="usage">Usage </label>
							<input id="usage" type="text" class="form-control" name="usage" required>
						</div>
						<div class="form-group">
							<label for="arrive">Date d'arrivé APC:  </label>
							<input id="arrive" type="date" class="form-control" name="arrive" required>
						</div>
						<div class="form-group">
							<label for="numeroOrd">Numéro d'ordre </label>
							<input id="numeroOrd" type="number" class="form-control" name="numeroOrd" required>
						</div>
						<div class="form-group">
							<label for="programmation">Date programmation du dossier guichet unique:  </label>
							<input id="programmation" type="date" class="form-control" name="programmation" required>
						</div>
						<div class="form-group">
							<label for="avis">Nature de l'avis</label>
							<select id="avis" name="avis" required>
								<option value="Favorable">Favorable</option>
								<option value="Défavorable">Défavorable</option>
								<option value="Ajourné">Ajourné</option>
							</select>
						</div>
						<button class="btn btn-outline-success" type="submit">Envoyer</button>
					</form>
				</div>
			</div>
		</div>
        <?php
          if(isset($_POST['nom'])){
	          require "bdd.php";
	          $bdd=$GLOBALS["bdd"];
	          $response=$bdd->prepare("INSERT INTO acteUrbanisme (nom,prenom,localisation,nature,usageTerrain,arrive,numeroOrd,programmation,avis) VALUES (:nom,:prenom,:localisation,:nature,:usageTerrain,:arrive,:numeroOrd,:programmation,:avis)");
	          $response->execute(array(
		          "nom"=>$_POST['nom'],
		          "prenom"=>$_POST['prenom'],
		          "localisation"=>$_POST['localisation'],
		          "nature"=>$_POST['nature'],
		          "usageTerrain"=>$_POST['usage'],
		          "arrive"=>$_POST['arrive'],
		          "numeroOrd"=>$_POST['numeroOrd'],
		          "programmation"=>$_POST['programmation'],
		          "avis"=>$_POST['avis']
	          ));
	          ?>
                  <div class="container">
                      <div class="row">
                          <div class="alert alert-success alert-dismissible
                          fadeshadow" role="alert">
                              <h5 class="alert-heading">Insertion Réussie</h5>
                              <button type="button" class="close"
                                      data-dismiss="alert">
                                  <span>×</span>
                              </button>
                          </div>
                      </div>
                  </div>
             <?php
           $response->closeCursor();
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