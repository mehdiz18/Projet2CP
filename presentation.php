 <!doctype html>
<html lang="en">
  <head>
    <title>Présentation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="Style/urbanisme.css">
    <link rel="stylesheet" href="Style/common.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
        <div class="col mt-2">
          <div id="my-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner rounded-lg">
              <div class="carousel-item active">
                <img class="d-block w-100" src="media/Presentation/slide1.jpg">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="media/Presentation/slide2.jpg">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="media/Presentation/slide3.jpg">
              </div>
            </div>
            <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 mt-2 p-2 documents2 rounded-lg shadow-lg">
          <h2>Présentation: </h2>
          <p>La commune de Taourirt-Ighil, en tifinagh <em class="text-success">ⵝⴰⵡⵔⵉⵔⵝ ⵏ ⵢⵉⵖⵉⵍ </em> est une commune de la daira d'Adekkar, wilaya de Bejaia.
          Une commune d'une supérficie de 72 km² et de 6700 habitants.</p>
          <h3>Situation géographique: </h3>
          <p>La commune de Taourirt-Ighil se trouve au sud-ouest de la wilaya de Bejaia, à 3km du chef-lieu de la daira d'Adekkar et à 45km du chef-lieu de la wilaya de Bejaia.</p>
          <h4>Communes limitrophes: </h4>
          <ul>
            <li>Nord: Béni Ksila</li>
            <li>Sud: Tifra,Fenaia Ilmaten</li>
            <li>Est: El-Kseur</li>
            <li>Ouest: Adekkar</li>
          </ul>
        </div>
        <div class="col-12 col-md-6 mt-2 rounded-lg">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53692.67840252798!2d4
          .705183904717097!3d36.73267432026399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128d178fc245d783%3A0xde484edee2513d51!2sTaourirt%20Ighil!5e1!3m2!1sfr!2sdz!4v1619301697780!5m2!1sfr!2sdz" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col mt-2 documents2 rounded-lg shadow-lg">
          <h3>Villages: </h3>
          <ul>
            <li>Tizi El-Korn</li>
            <li>Aguemoune</li>
            <li>Taourirt-Ighil Centre</li>
            <li>Ait Maamar</li>
            <li>Ait Idir</li>
            <li>Cheurfa</li>
            <li>Iksilene</li>
            <li>Ait Seid</li>
            <li>Grounia</li>
            <li>Ait Sidi Seid</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col mt-2 documents2 rounded-lg shadow-lg">
          <h3>Infrastructures </h3>
          <h4 class="pl-3">Ecoles Primaires: </h4>
          <ul class="pl-5">
            <li>Si Ahmed Ahmed, Village Ait Maamar.</li>
            <li>Boudjemiel Ferhat, Village Ait Idir</li>
            <li>Ismail Ouremtane, Village Tizi El-korn</li>
            <li>Aid Mohand, Taourirt-Ighil Centre</li>
            <li>Mohamedi Larbi, Village Aguemoune</li>
            <li>Bouaita Cherif, Village Iksilene</li>
            <li>Taibi Mohand Rachid, Village Cheurfa</li>
          </ul>
          <h4 class="pl-3">CEM:</h4>
          <ul class="pl-5">
            <li>Azriou Mohand Ouidir, Taourirt-Ighil Centre</li>
          </ul>
          <h4 class="pl-3">Foyers de Jeunes: </h4>
          <ul class="pl-5">
            <li>Ait Maamar</li>
            <li>Ait Idir</li>
            <li>Aguemoune</li>
            <li>Iksilene</li>
          </ul>
          <h4 class="pl-3">Maisons de jeunes: </h4>
          <ul class="pl-5">
            <li>Taourirt-Ighil Centre</li>
          </ul>
          <h4 class="pl-3">Bibliothéque communale (Non fonctionnelle)</h4>
          <h4 class="pl-3">Annexe CFPA</h4>
          <h4 class="pl-3">Annexe APC: Taourirt-Ighil Centre</h4>
          <h4 class="pl-3">Agence Postale: Tizi El-Korn / Taourirt-Ighil Centre</h4>
          <h4 class="pl-3">Salles de soins: </h4>
          <ul class="pl-5">
            <li>Taourirt-Ighil Centre</li>
            <li>Tizi El-Korn</li>
            <li>Ait Idir</li>
            <li>Aguemoune</li>
            <li>Cheurfa</li>
          </ul>
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