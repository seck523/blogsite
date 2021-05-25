<?php
include ('config.php');

$recupMessages = $bdd->query('SELECT * FROM messages');
while($message = $recupMessages->fetch()){
    ?>
    <div class="message">
    <h4 class="mess"><?= $message['login']; ?></h4>
    <p class="id"><?= $message['message']; ?></p>
    </div>
<?php
}
?>