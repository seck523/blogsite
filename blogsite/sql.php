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
    <title>MySQL</title>
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
            <p>MySQL est un système de gestion de bases de données relationnelles (SGBDR). Il est distribué sous une double licence GPL et propriétaire. Il fait partie des logiciels de gestion de base de données les plus utilisés au monde3, autant par le grand public (applications web principalement) que par des professionnels, en concurrence avec Oracle, PostgreSQL et Microsoft SQL Server.

Son nom vient du prénom de la fille du cocréateur Michael Widenius, My (sv) (prononcer [my]). SQL fait référence au Structured Query Language, le langage de requête utilisé.</p>
            <p>MySQL AB a été acheté le 16 janvier 2008 par Sun Microsystems pour un milliard de dollars américains4. En 2009, Sun Microsystems a été acquis par Oracle Corporation, mettant entre les mains d'une même société les deux produits concurrents que sont Oracle Database et MySQL. Ce rachat a été autorisé par la Commission européenne le 21 janvier 20105,6.

Depuis mai 2009, son créateur Michael Widenius a créé MariaDB (Maria est le prénom de sa deuxième fille) pour continuer son développement en tant que projet Open Source.</p>
            <p>MySQL est un serveur de bases de données relationnelles SQL développé dans un souci de performances élevées en lecture, ce qui signifie qu'il est davantage orienté vers le service de données déjà en place que vers celui de mises à jour fréquentes et fortement sécurisées. Il est multi-thread et multi-utilisateur.

C'est un logiciel libre7, open source8, développé sous double licence selon qu'il est distribué avec un produit libre ou avec un produit propriétaire. Dans ce dernier cas, la licence est payante, sinon c'est la licence publique générale GNU (GPL) qui s'applique. Un logiciel qui intègre du code MySQL ou intègre MySQL lors de son installation devra donc être libre ou acquérir une licence payante. Cependant, si la base de données est séparée du logiciel propriétaire qui ne fait qu'utiliser des API tierces (par exemple en C# ou php), alors il n'y a pas besoin d'acquérir une licence payante MySQL. Ce type de licence double est utilisé par d'autres produits comme le framework de développement de logiciels Qt (pour les versions antérieures à la 4.5</p>
            <p>L'une des spécificités de MySQL est de pouvoir gérer plusieurs moteurs au sein d'une seule base. Chaque table peut utiliser un moteur différent au sein d'une base. Ceci afin d'optimiser l'utilisation de chaque table.

Voici les différents moteurs historiques de MySQL :

MyISAM : moteur par défaut de MySQL jusqu'à la version 5.5. Il est le plus simple à utiliser et à mettre en œuvre. Il utilise plusieurs fichiers qui grandissent au fur et à mesure que la base grossit. Il ne supporte pas les transactions, ni les clefs étrangères ;
InnoDB : moteur créé et maintenu par InnoBase [archive] (racheté par Oracle le 7 octobre 2005). Il gère les transactions et les clefs étrangères (et donc l'intégrité de ses tables). En contrepartie, les bases qui l'utilisent occupent bien plus d'espace sur le disque. InnoDB est le moteur par défaut depuis la version 5.6.
BerkeleyDB (BDB) : moteur fourni par Sleepycat Software qui gère les transactions ;
Merge : moteur fait pour fusionner plusieurs tables qui doivent être identiques ;
Aarchive : moteur adapté à l'archivage de données. Les lignes sont compressées au fur et à mesure de leur insertion. Les requêtes de recherches sont alors sensiblement plus lentes ;
Memory (Heap) : moteur où les tables sont stockées uniquement en mémoire. La structure de la base est stockée sur le disque dur mais les données sont stockées dans la RAM, si la machine serveur redémarre, les données seront perdues. Cependant, étant donné qu'il n'y a plus d'accès disque, une requête de modification (UPDATE, INSERT…) s'exécutera bien plus rapidement et sans charger les bras d'accès ; convient pour les mémorisations temporaires, comme un panier en e-commerce;
CSV : moteur utilisant des fichiers textes (au format CSV) comme stockage ;
Blackhole : moteur réceptionnant les données, les transférant mais ne les stockant pas. Il peut être utilisé comme répéteur ou comme filtre de données ;
ISAM : moteur d'origine de MySQL, maintenant obsolète et remplacé par MyISAM. Il est resté pour des raisons de compatibilité ;
NDB (uniquement dans la version MaxDB) : moteur de base de données réseau gérant les grappes de serveurs ;
Federated : moteur permettant d'accéder à des tables d'une base de données distantes plutôt que dans les fichiers locaux ;
Exemple : moteur fictif et inutilisable, mis à disposition pour les développeurs ;
Falcon (en) : ce nouveau moteur devait faire son apparition avec MySQL 6. À l'époque MySQL AB avait voulu créer un nouveau moteur transactionnel pour ne plus dépendre d'Oracle qui venait de racheter InnoBase, créateurs du moteur de stockage InnoDB. Ce moteur de stockage a été abandonné depuis le rachat de MySQL par Oracle.
Aria (anciennement Maria) : évolution ACID de MyISAM.
Des moteurs de stockages open source :

Infobright : moteur VLDB, orienté vers les applications décisionnelles ;
Sphinx : moteur orienté recherche full text ;
PBXT : moteur transactionnel proche des performances d'InnoDB ;
Memcached : moteur orienté table de hash en mémoire ;
M4q : moteur orienté gestion de file d'attente.
ColumnStore (MariaDB) Moteur orienté colonne.
Des moteurs de stockages commerciaux :

DB2 Moteur transactionnel copyright IBM ;
SolidDB Moteur transactionnel copyright IBM ;
NitroEDB Moteur VLDB copyright BrightHouse ;
Tokutek Moteur VLDB.
La facilité d'utilisation de plusieurs moteurs de stockage dans une seule base avec MySQL permet une énorme flexibilité dans l'optimisation de la base : on utilisera MyISAM pour stocker les données peu sensibles et nécessitant un accès rapide aux données (par exemple une liste d'utilisateurs), InnoDB pour les fonctions avancées et les données plus sensibles (par exemple pour une liste des transactions bancaires), MEMORY pour des données pouvant être perdues lors du redémarrage de la machine et souvent modifiées (par exemple une liste d'utilisateurs en ligne), ARCHIVE pour un historique (ou log) ne nécessitant que peu de lecture</p>


        </div>
        </section>

<?php
include "footer.php";

?>


</body>
</html>  