<!doctype html>
<html lang="en">
  <head>
    <title>Contacter APC</title>
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
    <main class="container documents rounded-lg mt-2">
          <form class="container" method="post" action="#">
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label mt-2">Nom*: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control mt-2" id="name" required name="nom">
              </div>
            </div>
            <div class="form-group row">
              <label for="surname" class="col-sm-2 col-form-label">Prénom*: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="surname"
                       required name="prenom">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email*: </label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" required
                       name="email">
              </div>
            </div>
            <div class="form-group row">
              <label for="phone" class="col-sm-2 col-form-label">Téléphone*: </label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="phone" name="phone">
              </div>
            </div>
            <div class="form-group row">
              <label for="adress" class="col-sm-2 col-form-label">Adresse: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="adress"
                       name="adresse">
              </div>
            </div>
            <div class="form-group row">
              <label for="service" class="col-sm-2 col-form-label">Service à contacter*: </label>
              <div class="col-sm-10" required>
                <select id="service" name="service">
                  <option value="etat_civile">État civile</option>
                  <option value="bhc">BHC</option>
                  <option value="urbanisme">Urbanisme</option>
                  <option value="service_technique">Service Technique</option>
                  <option value="affaires_sociales">Affaires Sociales</option>
                </select>
              </div>
            </div>
              <div class="form-group row">
                  <label for="objet" class="col-sm-2 col-form-label">Objet:* </label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="objet"
                             name="objet">
                  </div>
              </div>
            <div class="form-group row">
              <label for="reclamation" class="col-sm-2 col-form-label">Votre
                  réclamation:* </label>
              <div class="col-sm-10">
                <textarea name="reclamation" id="reclamation" cols="30"
                          rows="10" placeholder="Saisissez votre texte ici
                          ." required class="form-control-plaintext bg-white"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-light">Envoyer</button>
              </div>
            </div>
          </form>
          <p>Les champs marqués par (*) sont obligatoires</p>
	    <?php
		    if(isset($_POST['nom'])AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['phone']) AND isset($_POST['service']) AND isset($_POST['reclamation'])){
		        require "bdd.php";
		        $bdd=$GLOBALS["bdd"];
			    $response=$bdd->prepare("INSERT INTO message (nom,prenom,email,phone,adresse,service,message,dateMessage,objet) VALUES (:nom,:prenom,:email,:phone,:adresse,:service,:reclamation,:datePost,:objet)");
			    $response->execute(array(
				    "nom"=>$_POST['nom'],
				    "prenom"=>$_POST['prenom'],
				    "email"=>$_POST['email'],
				    "phone"=>$_POST['phone'],
				    "adresse"=>$_POST['adresse'],
				    "service"=>$_POST['service'],
				    "reclamation"=>$_POST['reclamation'],
				    "datePost"=>date("Y-m-d"),
                    "objet"=>$_POST["objet"]
			    ));
			    ?>
                <script>alert("message envoyé avec succés");</script>
              <?php
				    }
	    ?>
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