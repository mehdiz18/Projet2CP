<?php
	session_start();
	if(isset($_SESSION['username'])){
		require "bdd.php";
		$bdd=$GLOBALS["bdd"];
		$bdd->query("DELETE FROM appel_offre WHERE id=".$_GET["id"]);
		header("Location:appelsOffres.php");
		?>
		<script>alert("Supprimé avec succès");</script>
		<?php
	}
	