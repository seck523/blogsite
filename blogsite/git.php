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
    <title>Git</title>
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
            <p>Git est un logiciel de gestion de versions décentralisé. C'est un logiciel libre créé par Linus Torvalds, auteur du noyau Linux, et distribué selon les termes de la licence publique générale GNU version 2. En 2016, il s’agit du logiciel de gestion de versions le plus populaire qui est utilisé par plus de douze millions de personnes3.</p>
            <p>Similaire en cela à BitKeeper, Git ne repose pas sur un serveur centralisé, mais il utilise un système de connexion pair à pair. Le code informatique développé est stocké non seulement sur l’ordinateur de chaque contributeur du projet, mais il peut également l'être sur un serveur dédié. C'est un outil de bas niveau, qui se veut simple et performant, dont la principale tâche est de gérer l'évolution du contenu d'une arborescence.

Git indexe les fichiers d'après leur somme de contrôle calculée avec la fonction de hachage SHA-1. Quand un fichier n'est pas modifié, la somme de contrôle ne change pas et le fichier n'est stocké qu'une seule fois. En revanche, si le fichier est modifié, les deux versions sont stockées sur le disque.

Contrastant avec les architectures de logiciel de gestion de versions habituellement utilisées jusqu'alors, Git repose entièrement sur un petit nombre de structures de données élémentaires. Linus Torvalds expliquait ainsi : « Par bien des aspects, vous pouvez considérer Git comme un simple système de fichiers. Il est adressé par contenu, et possède la notion de versionnement, mais je l'ai vraiment conçu en prenant le point de vue d'un spécialiste des systèmes de fichiers (après tout, j'ai l'habitude de travailler sur des noyaux) et je n'avais absolument aucune envie de créer un système de gestion de version traditionnel. »4 Les premières versions de Git offraient une interface rudimentaire pour manipuler ces objets internes avant que les fonctionnalités courantes de gestion de version ne soient ensuite progressivement ajoutées et raffinées.</p>
            <p>Git est considéré comme performant, au point que certains autres logiciels de gestion de version (Darcs, Arch), qui n'utilisent pas de base de données, se sont montrés intéressés par le système de stockage des fichiers de Git pour leur propre fonctionnement5,6. Ils continuent toutefois à proposer des fonctionnalités plus évoluées.

Dès le début, Git a été pensé dans le but de fonctionner de façon décentralisée, c'est d'ailleurs l'une des clefs de son succès[réf. souhaitée]. La décentralisation de Git a aussi beaucoup apporté au développement des logiciels libres, puisque le besoin de demander un compte sur un dépôt SVN ou CVS centralisé devient obsolète. Il suffit de forker un projet ou de le cloner pour commencer à travailler dessus (avec tout l'historique du projet en local) et ensuite de proposer sa contribution (pull request) au dépôt principal (mainteneur principal du projet).

Les serveurs Git utilisent par défaut le port 9418 pour le protocole spécifique à Git. Les protocoles HTTP, HTTPS et SSH (et leurs ports standards) peuvent aussi être utilisés.</p>
      <p>Git dispose notamment des commandes suivantes :

git init​ crée un nouveau dépôt ;
git clone​ clone un dépôt distant ;
git add​ ajoute de nouveaux objets blobs dans la base des objets pour chaque fichier modifié depuis le dernier commit. Les objets précédents restent inchangés ;
git commit​ intègre la somme de contrôle SHA-1 d'un objet tree et les sommes de contrôle des objets commits parents pour créer un nouvel objet commit ;
git branch​ liste les branches ;
git merge​ fusionne une branche dans une autre ;
git rebase​ déplace les commits de la branche courante devant les nouveaux commits d’une autre branche ;
git log​ affiche la liste des commits effectués sur une branche ;
git push​ publie les nouvelles révisions sur le remote. (La commande prend différents paramètres) ;
git pull​ récupère les dernières modifications distantes du projet (depuis le Remote) et les fusionne dans la branche courante ;
git stash​ stocke de côté un état non commité afin d’effectuer d’autres tâches.
</p>

        </div>
    </section>

<?php
include "footer.php";

?>

</body>
</html>  