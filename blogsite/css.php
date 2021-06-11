<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Css3</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    <p> un langage informatique qui décrit la présentation des documents HTML et XML. Les standards définissant CSS sont publiés par le World Wide Web Consortium (W3C). Introduit au milieu des années 1990, CSS devient couramment utilisé dans la conception de sites web et bien pris en charge par les navigateurs web dans les années 2000.</p>
    <p>Le concept de feuille de style est présent dès l'origine du World Wide Web : le premier navigateur web WorldWideWeb permet de mettre en forme les documents à l'aide de ce qui serait aujourd'hui considéré comme une « feuille de style utilisateur »2. De même, les navigateurs Viola en 1992 et Harmony en 1993 recourent à un mécanisme similaire permettant de déterminer le rendu des polices de caractères, des couleurs ou de l'alignement du texte.</p>
    <p>Il ne s'agit cependant pas de styles déterminés par l'auteur du document. HTML ne comportant pas non plus d'éléments de présentation dans ses premières années, une pression croissante s'exerce alors pour que les navigateurs permettent aux auteurs de déterminer eux-mêmes la présentation des pages web3, dans une démarche issue de la publication imprimée électronique.

C'est dans ce contexte, en 1994-1995, que le tout nouveau Netscape Navigator introduit les premiers éléments HTML de présentation à l'initiative de Marc Andreessen, tandis qu'apparaissent concurremment les premières propositions de styles externesn. 1 :

le « stylesheet proposal » de Pei Wei (créateur de Viola)4
les « Stylesheets for HTML  » de Robert Raisch (O'Reilly)5
les «  Cascading HTML Style Sheets » (CHSS) d'Håkon Wium Lie</p>
    <p>L'apparition de CSS répond à une volonté de « proposer une alternative à l'évolution du HTML d'un langage de structuration vers un langage de présentation »7.

Une troisième voie de développement est également ouverte à la même époque : le langage de transformation DSSSL des documents SGML, élaboré par James Clark, suggère la possibilité d'un langage de styles qui ne soit pas seulement descriptif, et se rapproche d'un véritable langage de programmationn. 2. Cette voie est suivie par Netscape, qui propose en 1996 au W3C les « JavaScript-Based Style Sheets » (JSSS)8, implémentées par Netscape Navigator 4 en 1997.

Les origines des CSS sont donc liées à trois possibilités majeures :

HTML est-il un langage de structuration ou un langage mixte de mise en forme et de structuration ?
Les choix de présentation de l'auteur doivent-ils avoir la primauté sur ceux de l'utilisateur ?
La réponse aux besoins est-elle un langage de description de la mise en forme ou un langage de transformation</p>
    <p>La première proposition de Cascading HTML Style Sheets formulée par Håkon Wium Lie retient l'attention de Dave Raggett, qui est alors le principal éditeur du projet de spécification HTML 3.09. Partisan d'un HTML purement structurel, il encourage la publication d'un document de travail CHSS, afin que celui-ci puisse être présenté et discuté à la seconde conférence internationale sur le WWW (Mosaic and the Web, Chicago, 1994). Il modifie également avec Håkon Lie le navigateur Arenan. 3, afin de permettre de tester ce langage, et en fait la démonstration lors de la troisième conférence WWW en 1995.

Parallèlement, Bert Bos, qui travaillait alors sur le navigateur Argo10, et qui avait soumis au W3C son propre projet « Stream-based Style Sheet Proposal » (SSP), décide de joindre ses efforts à ceux d'Håkon Lie. SSP ayant été développé avec l'idée d'être applicable non seulement à HTML, mais aussi à d'autres langages de balisage, Bert Bos et Håkon Lie reprennent cet objectif, et en font une des caractéristiques clés de ce qui devient alors CSS proprement dit.

Un autre aspect de CSS s'avère alors déterminant face aux alternatives existantes : CSS est le premier langage à inclure l'idée de « cascade » (feuille de style en cascade), c'est-à-dire la possibilité pour le style d'un document d'être hérité à partir de plusieurs « feuilles de style ». Cela permet d'arbitrer entre plusieurs sources concurrentes de mise en forme d'un élément, et répond donc à la nécessité de composer entre les préférences stylistiques des auteurs et des utilisateurs.

Le World Wide Web Consortium (W3C) devient opérationnel en 1995, et la liste de discussion www-style est alors créée11. La même année se tient à Paris un « W3C style sheet workshop » décisif pour l'avenir des CSS12. Y est notamment affirmée la volonté de conserver les feuilles de style sous une forme simple, ce qui exclut l'hypothèse JSSS de Netscape. Par ailleurs, Thomas Reardon (Microsoft) y annonce le support à venir de CSS dans les futures versions d'Internet Explorer : dès lors, lorsque le W3C crée à la fin de l'année le « HTML Editorial Review Board » (HTML ERB) pour ratifier les futures spécifications HTML, DOM et CSS, Netscape, représenté par Lou Montulli, se rallie finalement au projet CSS mené par Bert Bos et Håkon Lie.</p>


</div>
</section>


<?php
include "footer.php";

?>



    
</body>
</html>