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
			<title>Liste actualités</title>
		</head>
		<body>
		<div class="container mt-2 text-white">
			<a href="adminInfos.php">Retour au menu</a>
			<a href="deconnexion.php">Déconnexion</a>
            <a href="ajoutInfos.php">Ajouter des infos</a>
			<?php
                require "bdd.php";
                $bdd=$GLOBALS["bdd"];
				$response=$bdd->prepare("SELECT * FROM info");
				$response->execute();
				$count=$response->rowCount();
				if($count!=0){
					$i=1;
					while($donnes=$response->fetch()){
						echo "<div class=\"row documents rounded-lg mt-2\">";
						echo "<div class='col-12'>";
						echo "<h3>Titre: ".$donnes["titre"]."</h3><br>";
						echo "</div>";
						echo "<div class='col-12'>";
						echo "<h3>Résumé: ".$donnes["resume"]."</h3><br>";
						echo "</div>";
						echo "<div class='col'>";
						echo "<a href='delete3.php?id=".$donnes["id"]."'class='text-warning'>Supprimer</a>";
						echo "</div>";
						echo "</div>";
						$i=$i+1;
						
					}
				}else{
					echo "<h1 class='text-dark'>Pas d'infos pour l'instant </h1>";
					echo "<a href='ajoutInfos.php'><h3>Ajouter des infos</h3></a>";
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
