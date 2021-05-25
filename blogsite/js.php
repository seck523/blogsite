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
    <title>Javascript</title>
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
        <p>Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l'une des technologies cœur du World Wide Web2. Une grande majorité des sites web l'utilisent3, et la majorité des navigateurs web disposent d'un moteur JavaScript4 dédié pour l'interpréter, indépendamment des considérations de sécurité qui peuvent se poser le cas échéant.

C'est un langage orienté objet à prototype : les bases du langage et ses principales interfaces sont fournies par des objets.

Cependant, à la différence d'un langage orienté objets, les objets de base ne sont pas des instances de classes.</p>
        <p>Chaque objet de base (ex : l'objet document ou windows) possède son propre modèle qui lui permettra d'instancier des objets fils à l'aide de constructeurs utilisant ses propriétés. Par exemple, la propriété de prototypage va leur permettre de créer des objets héritiers personnalisés.

En outre, les fonctions sont des objets de première classe. Le langage supporte le paradigme objet, impératif et fonctionnel. JavaScript est le langage possédant le plus large écosystème grâce à son gestionnaire de dépendances npm, avec environ 500 000 paquets en août 20175.

JavaScript a été créé en 1995 par Brendan Eich. Il a été standardisé sous le nom d'ECMAScript en juin 1997 par Ecma International dans le standard ECMA-262. La version actuellement en vigueur de ce standard, depuis juin 2020, est la 11ème édition.

JavaScript est une implémentation d'ECMAScript, celle mise en œuvre par la fondation Mozilla. L'implémentation d'ECMAScript par Microsoft (dans Internet Explorer jusqu'à sa version 9) se nomme JScript, tandis que celle d'Adobe Systems se nomme ActionScript.

JavaScript est aussi employé pour les serveurs6 avec l'utilisation (par exemple) de Node.js7 ou de Deno8.</p>
        

« JavaScript » devient une marque déposée par Oracle aux États-Unis en mai 199712,13.></p>
    <p>JavaScript et la structure DOM des pages HTML/XML ont quelques failles de sécurité. En effet, des scripts malveillants peuvent se cacher dans le code d'une page web et s'exécuter sur l'ordinateur cible de l'utilisateur du Web.

Les fournisseurs de navigateurs web tentent de réduire ce risque avec deux restrictions :

L'une est de faire exécuter ces scripts dans un espace à part des autres données (sandbox) dans lequel seules des actions relatives au web (mouvements de souris, affichage de pixel, communications) peuvent être exécutées, sans avoir accès au système de fichier principal.
La deuxième est de n'exécuter les scripts que selon les contraintes de same-origin policy : dans cet esprit, un site Web ne doit pas avoir accès aux informations telles que les noms d'utilisateur et mot de passe ou cookies reçus des autres sites visités.
Les vulnérabilités de JavaScript sont bien souvent des brèches d'au moins l'un de ces deux principes.

Certains sous-ensembles du langage Javascript tels que JavaScript—ADsafe ou Secure ECMAScript (SES) fournissent de plus grands niveaux de sécurité, en particulier pour les scripts créés par des tierces parties (notamment les publicités)15,16. Caja est un autre logiciel pour inclure et isoler de manière sécurisée du JavaScript et du HTML tierce partie.

La Politique de sécurité du contenu est la principale méthode destinée à assurer que seul un script de confiance est exécuté sur une page Web. Meltdown est une vulnérabilité indépendante de Javascript, qui peut notamment être exploitée en Javascript.</p>
        </div>
<?php
include "footer.php";

?>


 </body>
</html>  