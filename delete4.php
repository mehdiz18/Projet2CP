<?php
	session_start();
	if(isset($_SESSION['username'])){
		require "bdd.php";
		$bdd=$GLOBALS["bdd"];
		$bdd->query("DELETE FROM projet WHERE id=".$_GET["id"]);
		header("Location:listeProjets.php");
		?>
		<script>alert("Supprimé avec succès");</script>
<?php
	}
	