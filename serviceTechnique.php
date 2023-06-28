<!doctype html>
<html lang="en">
  <head>
    <title>Service Technique</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="Style/urbanisme.css">
    <link rel="stylesheet" href="Style/common.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="media/Service Technique/icone.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  </head>

  <body onload="copyrightYear();">
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
      <div class="row">
        <div class="col">
          <h2>Situations physique et financière des projets</h2>
        </div>
      </div>
	    <?php
		    require "bdd.php";
		    $bdd=$GLOBALS["bdd"];
		    $response=$bdd->prepare("SELECT intitule, EXTRACT(YEAR FROM date) AS date FROM projet ORDER BY date ASC ");
		    $response->execute();
		    if($response->rowCount()==0){
		        echo "<div class='text-center'>";
			    echo "<img src='media/travaux.png' class='h-75 w-75'>";
			    echo "</div>";
		    }else{
			    $firstYear=$response->fetch();
			    echo "<div class='row'>";
			    echo "<div class='col documents rounded-lg mt-2'>";
			    echo "<h4>Projets ".$firstYear["date"]."</h4>";
			    echo "<ol>";
			    echo "<li>".$firstYear["intitule"]."</li>";
			    while($donnes=$response->fetch()){
				    if($donnes['date']==$firstYear["date"]){
					    echo"<li>".$donnes["intitule"]."</li>";
				    }else{
					    $firstYear["date"]=$donnes["date"];
					    echo "</ol>";
					    echo "</div>";
					    echo "</div>";
					    echo "<div class='row'>";
					    echo "<div class='col documents rounded-lg mt-2'>";
					    echo "<h4>Projets ".$donnes["date"]."</h4>";
					    echo "<ol>";
					    echo "<li>".$donnes["intitule"]."</li>";
				    }
			    }
			    echo "</ol>";
			    echo "</div>";
			    echo "</div>";
		    }
	    ?>
      <div class="row">
        <div class="col documents rounded-lg mt-3" id="appelsOffres">
          <h4>Appels d'offres</h4>
          <?php
	          require "bdd.php";
	          $bdd=$GLOBALS["bdd"];
	          $response=$bdd->prepare("SELECT * FROM appel_offre");
	          $response->execute();
	          $count=$response->rowCount();
	          if($count!=0){
		          $i=1;
		          while($donnes=$response->fetch()){
			          echo "<div class=\"row rounded-lg mt-2 ml-3\">";
			          echo "<div class='col-12'>";
			          echo "<h4>Appel n°".$i." du ".$donnes["dateAppel"]."</h4>";
			          echo "</div>";
			          echo "<div class='col-12'>";
			          echo "<h6 class='ml-4'>Intitulé: ".$donnes["intitule"]."</h6><br>";
			          echo "</div>";
			          echo "<div class='col-12'>";
			          echo "<h6 class='ml-4'>Details: <a href='".$donnes['file']."'>Par ici</a></h6><br>";
			          echo "</div>";
			          echo "</div>";
			          echo "<hr>";
			          $i=$i+1;
			
		          }
	          }else{
		          echo "<h1>Pas d'appels d'offres pour l'instant</h1>";
	          }
          ?>
        </div>
      </div>
    </main>
    <?php
      include("footer.php");
    ?>
      
    <!-- Optional JavaScript -->
    <script src="Js/common.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>