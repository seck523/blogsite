<?php 
session_start();
include ('config.php');
if(isset($_POST['valider'])){
    if(!empty($_POST['login']) AND !empty($_POST['mdp'])){
    
        $login = htmlspecialchars($_POST['login']);
        $mdp = htmlspecialchars($_POST['mdp']);

        $VerifUser = $bdd->prepare("select * from users where login=? and pass=? limit 1");
		$UserData = $VerifUser->fetch();
        if($VerifUser->rowCount() == 1){
            $message="<li>Mauvais login ou mot de passe!</li>";
		}else
		
			$_SESSION["autoriser"]="oui";
			$_SESSION['nom']=$data['nom'];
			$_SESSION['prenom']=$data['prenom'];
			$_SESSION['login']=$data['login'];
			$_SESSION['mdp']=$data['mdp'];
			$_SESSION["nomPrenom"]=strtoupper($tab[0]["nom"]." ".$tab[0]["prenom"]);

			header("location:session.php");
	
        
    }
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
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/nav.css" />
</head>
<body>

        <header>    
			Authentification
			<a href="inscription.php">S'inscrire</a>
		</header>
		
		<form name="fo" method="post" action="">
			<div class="label">Login</div>
			<input type="text" placeholder="Email"name="login"/>
			<div class="label">Mot de passe</div>
			<input type="password"placeholder="Mot de passe" name="mdp"/>
	        <input class="link"type="submit" name="valider" />
		</form>
		
    
</body>
</html>