<?php 
	session_start();


	
	
include ('config.php');

if(isset($_POST['valider'])){
    if(!empty($_POST['login']) AND !empty($_POST['message'])){
        $login = htmlspecialchars($_POST['login']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insererMessage = $bdd->prepare('INSERT INTO messages(login, message) VALUES(?, ?)');
        $insererMessage->execute(array($login, $message));
    }else{
        echo "Veuillez completez votre votre pseudo";
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
    <title>Forum</title>
    <link rel="stylesheet" href="assets/css/main.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>
<body>

<header>
<nav>
<ul>
<li><a href="login.php">Connexion</a></li>
<li><a href="inscription.php">S'incrire</a></li>
<li><a href="deconnexion.php">Déconnexion</a></li>
<?php
if(isset($_SESSION['nom'])){
   
}
?>
</ul>
</nav>
</header>  
<section>
<h1 class="titre">Bienvenue dans notre forum</h1>
<h2>L'endroit où partager vos erreurs de code, d'entraide et autres astuces</h2>
<p class="log">Veuillez vous <a href="login.php">Connecter </a>afin de poster un message !</p>,

</section>


    <form method="POST" action="" align="center" class="in">
    <input type="text" name="login" placeholder="email" class="div">
    <br><br>
    <textarea name="message" placeholder="votre message" class="min"></textarea><br>
    <input type="submit" name="valider" class="btn">
	</form>

    <section id="messages"></section>
   

	<script>
	setInterval('load_messages()', 500);
	function load_messages(){
		$('#messages').load('loadMessages.php');
	}
	</script>


    
</body>
</html>
