<?php 
$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8;' , 'root', '');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insererMessage = $bdd->prepare('INSERT INTO users(pseudo, message) VALUES(?, ?)');
        $insererMessage->execute(array($pseudo, $message));
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
    <title>Document</title>
</head>
<body>

    <form method="POST" action="" align="center">
    <input type="text" name="pseudo">
    <br><br>
    <textarea name="message" ></textarea><br>
    <input type="submit" name="valider">
    <section id="messages"></section>
    </form>
    
</body>
</html>