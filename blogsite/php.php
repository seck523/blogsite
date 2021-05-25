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
    <title>PHP</title>
    <link rel="stylesheet" href="assets/css/main.css">
  
</head>
<body>


 <header>
            <div class="menu">
                <ul>
                    <a href="index.php"><li>Accueil du Blog</li></a>
                    <a href="session.php"><li>Forum</li></a>
                    <a href="inscription.php"><li>S'Inscrire</li></a>
                    <a href="login.php"><li>Se Connecter</li></a>
                </ul>
            </div>
     </header>

    <section>
     <div class="toc">
         <p>principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP19, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.</p>
    <p>PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia21. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web.</p>
    <p>PHP est un langage de script utilisé le plus souvent côté serveur : dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS par exemple) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un navigateur web. PHP peut également générer d'autres formats comme le WML, le SVG et le PDF.

Il a été conçu pour permettre la création d'applications dynamiques, le plus souvent développées pour le Web. PHP est le plus souvent couplé à un serveur Apache bien qu'il puisse être installé sur la plupart des serveurs HTTP tels que IIS ou nginx. Ce couplage permet de récupérer des informations issues d'une base de données, d'un système de fichiers (contenu de fichiers et de l'arborescence) ou plus simplement des données envoyées par le navigateur afin d'être interprétées ou stockées pour une utilisation ultérieure.

C'est un langage peu typé et souple et donc facile à apprendre par un débutant mais, de ce fait, des failles de sécurité peuvent rapidement apparaître dans les applications. Pragmatique, PHP ne s'encombre pas de théorie et a tendance à choisir le chemin le plus direct. Néanmoins, le nom des fonctions (ainsi que le passage des arguments) ne respecte pas toujours une logique uniforme, ce qui peut être préjudiciable à l'apprentissage.</p>
    <p>Son utilisation commence avec le traitement des formulaires puis par l'accès aux bases de données. L'accès aux bases de données est aisé une fois l'installation des modules correspondants effectuée sur le serveur. La force la plus évidente de ce langage est qu'il a permis au fil du temps la résolution aisée de problèmes autrefois compliqués et est devenu par conséquent un composant incontournable des offres d'hébergements.

Il est multi-plateforme : autant sur Linux qu'avec Windows il permet aisément de reconduire le même code sur un environnement à peu près semblable (prendre en compte les règles d'arborescences de répertoires qui peuvent changer).

Libre, gratuit, simple d'utilisation et d'installation, ce langage nécessite comme tout langage de programmation une bonne compréhension des principales fonctions usuelles ainsi qu'une connaissance aiguë des problèmes de sécurité liés à ce langage.

La version 5.3 a introduit de nombreuses fonctions nouvelles : les espaces de noms (Namespace) — un élément fondamental de l'élaboration d'extensions, de bibliothèques et de frameworks structurés, les fonctions anonymes, les fermetures, etc.

En 2018, près de 80 % des sites web utilisent le langage PHP sous ses différentes versions22.</p>
    <p>Le 30 novembre 2017, la version de PHP 7.2, qui utilise Zend Engine 2, a introduit une modélisation objet plus performante, une gestion des erreurs fondée sur le modèle des exceptions, ainsi que des fonctionnalités de gestion pour les entreprises. PHP 5 apporte beaucoup de nouveautés, telles que le support de SQLite ainsi que des moyens de manipuler des fichiers et des structures XML basés sur libxml2 :

une API simple nommée SimpleXML ;
une API Document Object Model assez complète ;
une interface XPath utilisant les objets DOM et SimpleXML ;
intégration de libxslt pour les transformations XSLT via l'extension XSL ;
une bien meilleure gestion des objets par rapport à PHP 4, avec des possibilités qui tendent à se rapprocher de celles de Java</p>
</div>
</section>

<?php
include "footer.php";

?>

</body>
</html>  