<?php
	try{
		$bdd=new PDO("mysql:host=localhost;dbname=taourirt_ighil;charset=utf8","root","");
	}catch(Exception $e){
		die($e->getMessage());
	}