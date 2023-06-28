<!doctype html>
<html lang="en">
  <head>
    <title>Bureau d'Hygiene communal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="Style/urbanisme.css">
    <link rel="stylesheet" href="Style/common.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="media/BHC/icone.ico">
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
      <div class="col documents rounded-lg mt-2">
        <?php
          echo "<h2>Plan d'action du Bureau d'Hygiéne communal année ".date("Y")."</h2>";
        ?>
        <ol type="I">
          <li>
            <h4>Traitement et controle du systàme de traitement des de boisson: </h4>
            <ol>
              <li>Traitement par javelisation et par galet de chlore des points d'eau.</li>
              <li>Controle de teneure en chlore et prise des dispositions nécessaires.</li>
              <li>Controle de la qualité d'eau de boisson par des analyses bactériolégiques.</li>
            </ol>
          </li>
          <li>
            <h4>Inspection des établissements y recevant du public: </h4>
            <ol>
              <li>Alimentation générales.</li>
              <li>Cafétérias.</li>
              <li>Coiffeurs.</li>
              <li>Pizzérias.</li>
              <li>Patissiers.</li>
            </ol>
          </li>
          <li>
            <h4>Hygiène scolaire: </h4>
            <ol>
              <li>Inspection des établissements.</li>
              <li>Hygiène dans les cantines</li>
            </ol>
          </li>
          <li>
            <h4>Hygiène du milieu: </h4>
            <ol>
              <li>Ramassage quotidien des ordures.</li>
              <li>Réparation des reseaux d'assainissement défectueux</li>
            </ol>
          </li>
          <li>
            <h4>Campagne d'abattage: </h4>
            <p>L'organisation de la campagne d'abattage est subordonnée à la réparation de la case.</p>
          </li>
          <li>
            <h4>Chaulage des points d'eau de la commune à partir du mois d'avril.</h4>
          </li>
          <li>
            <h4>Gestion des stocks: </h4> 
            <ol>
              <li>Eau de javel.</li>
              <li>Chlorure de chaux.</li>
              <li>Comprimés DPD n°1.</li>
              <li>Matériel nécéssaire pour l'opération de chaulage.</li>
            </ol>
          </li>
          <li>
            <h4>Traitement des différentes requetes emanant des citoyens.</h4>
          </li>
        </ol>
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