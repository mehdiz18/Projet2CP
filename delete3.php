<?php
	session_start();
	if(isset($_SESSION['username'])){
		require "bdd.php";
		$bdd=$GLOBALS["bdd"];
		$bdd->query("DELETE FROM info WHERE id=".$_GET["id"]);
		header("Location:listeInfos.php");
		?>
		<script>alert("Supprimé avec succès");</script>
		<?php
	}
	