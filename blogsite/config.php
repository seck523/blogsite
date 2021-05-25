<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=yyp68982;charset=utf8', 'yyp68982', 'base2021');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


