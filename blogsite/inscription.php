<?php 
include ('config.php');
if(isset($_POST['valider'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['login']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $login = htmlspecialchars($_POST['login']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdp2 = htmlspecialchars($_POST['mdp2']);
    
        if($mdp == $mdp2){

        }else echo "Veuillez completez votre votre pseudo";
        }else $return = "les deux mots de passe ne correspondent pas";
    
		 $insererMessage = $bdd->prepare('INSERT INTO profil(nom, prenom, login, mdp) VALUES(?, ?, ?, ?)');
        $insererMessage->execute(array($nom, $prenom, $login, md5($mdp)));
        header("location:login.php");

 }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197593404-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-197593404-1');
</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/nav.css" />

</head>
<body>

<header>
        
			Inscription
			<a href="login.php">Déja inscrit</a>
		</header>
		<form name="fo" method="post" action="" enctype="multipart/form-data">
			<div class="label">Nom</div>


			<input type="text" placeholder="Votre nom" name="nom"  />
			<div class="label">Prénom</div>
			<input type="text" placeholder="Votre prenom" name="prenom"  />
			<div class="label">Login</div>
			<input type="text"  placeholder="Adresse email"name="login"  />
			<div class="label">Mot de passe</div>
			<input type="password" placeholder="Mot de passe" name="mdp" />
			<div class="label">Confirmation du mot de passe</div>
			<input type="password" placeholder="Confirmer le mot de passe" name="mdp2"/>
			<input type="submit" name="valider" value="S'inscrire" />
		</form>
		
    
</body>
</html>

