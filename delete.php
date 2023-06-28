<?php
	session_start();
	if(isset($_SESSION['username'])){
		require "bdd.php";
		$bdd=$GLOBALS["bdd"];
		$bdd->query("DELETE FROM message WHERE id=".$_GET["id"]);
		if($_GET['loc']=='urbanisme'){
			header("Location:messagerieUrbanisme.php");
		}else if($_GET['loc']=='etat_civil'){
			header("Location:messagerieEtatCivil.php");
		}else if($_GET['loc']=='service_technique'){
			header("Location:messagerieServiceTechnique.php");
		}else if($_GET['loc']=='bhc'){
			header("Location:messageriebhc.php");
		}
	}
	