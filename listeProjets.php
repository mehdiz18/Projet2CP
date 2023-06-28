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
			<link rel="stylesheet" href="Style/urbanisme.css">
			<title>Liste Projets</title>
		</head>
		<body>
		<div class="container mt-2 text-white">
			<a href="adminTechnique.php">Retour au menu</a>
			<a href="deconnexion.php">Déconnexion</a>
            <a href="ajoutProjets.php">Ajouter des Projets</a>
			<?php
				require "bdd.php";
				$bdd=$GLOBALS["bdd"];
				$response=$bdd->prepare("SELECT id,intitule, EXTRACT(YEAR FROM date) AS date FROM projet ORDER BY date ASC ");
				$response->execute();
				if($response->rowCount()==0){
					echo "<div class='text-center'>";
					echo "<h2 style='color: #1A2226'>Pas de projets pour l'instant</h2>";
					echo "<a href='ajoutProjets.php'><h3>Ajouter des projets</h3></a>";
					echo "<img src='media/travaux.png' class='h-75 w-75'>";
					echo "</div>";
				}else{
					$firstYear=$response->fetch();
					echo "<div class='row'>";
					echo "<div class='col documents rounded-lg mt-2'>";
					echo "<h4>Projets ".$firstYear["date"]."</h4>";
					echo "<ol>";
					echo "<li>".$firstYear["intitule"].".....<a href='delete4.php?id=".$firstYear["id"]."'class='text-warning'>Supprimer</a></li>";
					while($donnes=$response->fetch()){
						if($donnes['date']==$firstYear["date"]){
						    echo "<li>".$donnes["intitule"].".....<a href='delete4.php?id=".$donnes["id"]."'class='text-warning'>Supprimer</a></li>";
						}else{
							$firstYear["date"]=$donnes["date"];
							echo "</ol>";
							echo "</div>";
							echo "</div>";
							echo "<div class='row'>";
							echo "<div class='col documents rounded-lg mt-2'>";
							echo "<h4>Projets ".$donnes["date"]."</h4>";
							echo "<ol>";
							echo "<li>".$donnes["intitule"].".....<a href='delete4.php?id=".$donnes["id"]."'class='text-warning'>Supprimer</a></li>";
						}
					}
					echo "</ol>";
					echo "</div>";
					echo "</div>";
				}
			?>
		</div>
		<!-- Optional JavaScript; choose one of the two! -->
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
		</body>
		</html>
		<?php
	}else{
		header("Location:admin.php");
	}
?>
