<!doctype html>
<html lang="en">
  <head>
    <title>L'assemblée</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="Style/urbanisme.css">
    <link rel="stylesheet" href="Style/common.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="media/Urbanisme/icone.ico">
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
      <div class="row documents rounded-lg mt-2">
        <div class="col">
          <h2>L'organigramme de l'APC: </h2>
          <img src="media/assemblee/organigramme.png" class="w-100">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col">
          <h2>Composition de l'assemblée populaire communale: </h2>
          <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th>Nom et prénoms</th>
                <th>Qualité</th>
                <th>Appartenance politique</th>
              </tr>
            </thead>
            <tbody>
            <?php
	            require "bdd.php";
	            $bdd=$GLOBALS["bdd"];
	            $response=$bdd->query("SELECT nom,poste,parti FROM assemblee");
	            while($data = $response->fetch()){
		            echo "<tr>";
		            echo "<td>".$data["nom"]."</td>";
		            echo "<td>".$data["poste"]."</td>";
		            echo "<td>".$data["parti"]."</td>";
		            echo "</tr>";
	            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <?php
      include("footer.php");
    ?>
      
    <!-- Optional JavaScript -->
    <script src="Js/urbanisme.js"></script>
    <script src="Js/common.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>