<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'><link rel="stylesheet" href="Style/admin.css">

</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post" action="#">
                            <div class="form-group">
                                <label class="form-control-label">NOM D'UTILISATEUR</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">MOT DE PASSE</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">CONNEXION</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
	<?php
        require "bdd.php";
        $bdd=$GLOBALS["bdd"];
	    if(isset($_POST['username']) AND isset($_POST['password'])){
	        $req=$bdd->prepare("SELECT * FROM user WHERE username=:username");
	        $req->execute(array(
	                "username" => $_POST['username'],
            ));
	        if($donnes=$req->fetch()){;
	            if(password_verify($_POST['password'],$donnes['password'])){
	               $_SESSION['username']=$_POST['username'];
	               if($_POST['username']=="Surbanisme"){
	                   header("Location:adminUrbanisme.php");
                   }else if($_POST['username']=="Stechnique"){
	                   header("Location:adminTechnique.php");
                   }else if($_POST['username']=="Sinfos"){
	                   header("Location:adminInfos.php");
                   }else if($_POST['username']=="Sbhc"){
	                   header("Location:adminbhc.php");
	               }else if($_POST['username']=="SaffairesSociales"){
	                   header("Location:adminSociales.php");
	               }else if($_POST['username']=="SetatCivil"){
	                   header("Location:adminEtatCivil.php");
	               }
                }else{
	                ?>
	                <script>alert("Mot de passe incorrect");</script>
                    <?php
                }
            }else{
	            ?>
                <script>alert("Nom d'utilisateur incorrect");</script>
              <?php
              $req->closeCursor();
            }
        }
	?>
</body>
</html>
