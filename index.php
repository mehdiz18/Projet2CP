<!doctype html>
<html lang="fr">
<head>
  <title>APC Taourirt-Ighil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <link rel="stylesheet" href="Style/index.css">
  <link rel="stylesheet" href="Style/common.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="media/Accueil/icone.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body onload="copyrightYear(); getWeather(); app();">
<header class="container" id="header">
  <h5 class="text-center">République Algerienne Democratique et Populaire</h5>
  <h5 class="text-center">Wilaya De Béjaia</h5>
  <h5 class="text-center">APC Taourirt-Ighil</h5>
</header>
<div class="container">
  <div class="row">
    <?php
      include("menu.php");
    ?>
  </div>
</div>
<main class="container">
  <div class="row my-2">
    <div class="col-12 col-md-8">
      <article id="carouselHome" class="carousel slide mt-1 shadow-lg" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner rounded-lg shadow-lg" id="carouselInnerHome">
          <div class="carousel-item active">
            <img class="d-block w-100" src="media/Accueil/slide1.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="media/Accueil/slide2.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="media/Accueil/slide3.jpg" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="media/Accueil/slide4.jpg">
          </div>
          <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Precedent</span>
          </a>
          <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div>
      </article>
    </div>
    <div class="col-12 col-md-4 my-2" id="weather">
      <a class="weatherwidget-io" href="https://forecast7.com/fr/36d724d74/taourirt-ighil/" data-label_1="TOURIRT-IGHIL" data-label_2="METEO" data-theme="weather_one" >TOURIRT-IGHIL WEATHER</a>
    </div>
  </div>
  <div class="row rounded-lg p-3">
    <div class="col-12 col-md-8 articles rounded-lg" style="height:30em;overflow:scroll;">
      <a class="text-center articlesLinks" id="articlesLinks" href="#"><h2>ACTUALITÉS</h2></a>
      <?php
        require "bdd.php";
        $bdd=$GLOBALS["bdd"];
        $response=$bdd->query("SELECT * FROM info ORDER BY id DESC");
        while($data = $response->fetch()){
            echo "<hr>";
            echo "<article class='col-12'>";
            echo "<h4>".$data["titre"]."</h4>";
            echo "<p>".$data["resume"]."..."."<a href='info.php?id=".$data["id"]."'>Lire la suite</a></p>";
            echo "</article>";
        }
      ?>
      <hr>
    </div>
    <div class="col-12 col-md-3 articles rounded-lg mt-2 ml-md-2" id="app">
      <a href="serviceTechnique.php#appelsOffres" class="articlesLinks"><h3 class="text-center">Appels d'offres</h3></a>
      <ul id="appels">
        <?php
	        try{
		        $bdd=new PDO("mysql:host=localhost;dbname=taourirt_ighil;charset=utf8","root","");
	        }catch(Exception $e){
		        die($e->getMessage());
	        }
	        $response=$bdd->prepare("SELECT * FROM appel_offre");
	        $response->execute();
	        $count=$response->rowCount();
	        if($count!=0){
		        while($donnes=$response->fetch()){
			        echo "<li><a href='".$donnes["file"]."'>".$donnes['intitule']."</a>";
		        }
	        }else{
		        echo "<h5>Pas d'appels d'offres pour l'instant</h5>";
	        }
        ?>
      </ul>
    </div>
  </div>
</main>
<?php
  include("footer.php");
?>
<!-- Optional JavaScript -->
<script src="Js/index.js"></script>
<script src="Js/common.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
