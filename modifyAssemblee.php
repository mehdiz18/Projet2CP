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
			
			<title>Modification assemblée</title>
		</head>
		<body>
		<div class="container mt-4">
			<a href="adminInfos.php">Retour au menu</a>
			<a href="deconnexion.php" class="ml-5">Déconnexion</a>
		</div>
		<div class="container">
			<form method="post" action="#">
                <div class="form-group">
                    <label for="nb">Nombre d'elus: </label>
                    <input id="nb" name="nb" type="number" class="form-control">
                </div>
				<div class="form-row">
                    <div class="col-12">
                        <h4>Elu 1</h4>
                    </div>
					<div class="col">
						<label for="name1">Nom et prenom:</label>
						<input id="name1" type="text" name="name1" class="form-control">
					</div>
					<div class="col">
						<label for="poste1">Poste: </label>
						<input id="poste1" name="poste1" class="form-control" type="text">
					</div>
					<div class="col">
						<label for="parti1">Parti politique: </label>
						<input id="parti1" name="parti1" class="form-control" type="text">
					</div>
				</div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 2</h4>
                    </div>
                    <div class="col">
                        <label for="name2">Nom et prenom:</label>
                        <input id="name2" type="text" name="name2" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste2">Poste: </label>
                        <input id="poste2" name="poste2" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti2">Parti politique: </label>
                        <input id="parti2" name="parti2" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 3</h4>
                    </div>
                    <div class="col">
                        <label for="name3">Nom et prenom:</label>
                        <input id="name3" type="text" name="name3" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste3">Poste: </label>
                        <input id="poste3" name="poste3" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti3">Parti politique: </label>
                        <input id="parti3" name="parti3" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 4</h4>
                    </div>
                    <div class="col">
                        <label for="name4">Nom et prenom:</label>
                        <input id="name4" type="text" name="name4" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste4">Poste: </label>
                        <input id="poste4" name="poste4" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti4">Parti politique: </label>
                        <input id="parti4" name="parti4" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 5</h4>
                    </div>
                    <div class="col">
                        <label for="name5">Nom et prenom:</label>
                        <input id="name5" type="text" name="name5" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste5">Poste: </label>
                        <input id="poste5" name="poste5" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti5">Parti politique: </label>
                        <input id="parti5" name="parti5" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 6</h4>
                    </div>
                    <div class="col">
                        <label for="name6">Nom et prenom:</label>
                        <input id="name6" type="text" name="name6" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste6">Poste: </label>
                        <input id="poste6" name="poste6" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti6">Parti politique: </label>
                        <input id="parti6" name="parti6" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 7</h4>
                    </div>
                    <div class="col">
                        <label for="name7">Nom et prenom:</label>
                        <input id="name7" type="text" name="name7" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste7">Poste: </label>
                        <input id="poste7" name="poste7" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti7">Parti politique: </label>
                        <input id="parti7" name="parti7" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 8</h4>
                    </div>
                    <div class="col">
                        <label for="name8">Nom et prenom:</label>
                        <input id="name8" type="text" name="name8" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste8">Poste: </label>
                        <input id="poste8" name="poste8" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti8">Parti politique: </label>
                        <input id="parti8" name="parti8" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 9</h4>
                    </div>
                    <div class="col">
                        <label for="name9">Nom et prenom:</label>
                        <input id="name9" type="text" name="name9" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste9">Poste: </label>
                        <input id="poste9" name="poste9" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti9">Parti politique: </label>
                        <input id="parti9" name="parti9" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 10</h4>
                    </div>
                    <div class="col">
                        <label for="name10">Nom et prenom:</label>
                        <input id="name10" type="text" name="name10" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste10">Poste: </label>
                        <input id="poste10" name="poste10" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti10">Parti politique: </label>
                        <input id="parti10" name="parti10" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 11</h4>
                    </div>
                    <div class="col">
                        <label for="name11">Nom et prenom:</label>
                        <input id="name11" type="text" name="name11" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste11">Poste: </label>
                        <input id="poste11" name="poste11" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti11">Parti politique: </label>
                        <input id="parti11" name="parti11" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 12</h4>
                    </div>
                    <div class="col">
                        <label for="name12">Nom et prenom:</label>
                        <input id="name12" type="text" name="name12" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste12">Poste: </label>
                        <input id="poste12" name="poste12" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti12">Parti politique: </label>
                        <input id="parti12" name="parti12" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 13</h4>
                    </div>
                    <div class="col">
                        <label for="name13">Nom et prenom:</label>
                        <input id="name13" type="text" name="name13" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste13">Poste: </label>
                        <input id="poste13" name="poste13" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti13">Parti politique: </label>
                        <input id="parti13" name="parti13" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 14</h4>
                    </div>
                    <div class="col">
                        <label for="name14">Nom et prenom:</label>
                        <input id="name14" type="text" name="name14" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste14">Poste: </label>
                        <input id="poste14" name="poste14" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti14">Parti politique: </label>
                        <input id="parti14" name="parti14" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <h4>Elu 15</h4>
                    </div>
                    <div class="col">
                        <label for="name15">Nom et prenom:</label>
                        <input id="name15" type="text" name="name15" class="form-control">
                    </div>
                    <div class="col">
                        <label for="poste15">Poste: </label>
                        <input id="poste15" name="poste15" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="parti15">Parti politique: </label>
                        <input id="parti15" name="parti15" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Envoyer</button>
                    </div>
                </div>
			</form>
		</div>
		<?php
			if(isset($_POST['name1'])){
			    require "bdd.php";
			    $bdd=$GLOBALS["bdd"];
				$bdd->exec("DELETE FROM assemblee");
				$count=$_POST["nb"];
				$i=1;
				while($i<=$count){
				    $response=$bdd->prepare("INSERT INTO assemblee (nom,poste,parti) VALUES (:name,:poste,:parti)");
				    $response->execute(array(
				            "name"=>$_POST["name".$i],
                            "poste"=>$_POST["poste".$i],
                            "parti"=>$_POST["parti".$i]
                    ));
				    $i=$i+1;
				}
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