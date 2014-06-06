<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="smallResolution.css" /> <!-- Pour ceux qui ont une résolution inférieure à 1280px -->
        <meta name="viewport" content="width=device-width" />
        <title>Le Snaker</title>
    </head>
    <body>
        <div id="bloc_page">
            
            <?php
                include("includes/header.html");
                include("includes/baner.html");
            ?>
            
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Le jeu de l'ilot 3, de la classe 3°G : Le Snaker</h1>
                    <p>Le Snakers est un jeu de société inventé à l'occasion de l'épreuve HIDA de 2013-2014</dr>
                    <p>Avant de commencer la partie chaque joueur lance le dés le joueur qui a la plus grande valeur commence en 1er.
                        Le joueur qui commence jette de nouveau le dé, il avance de tant de case qui est annoncé sur le dé. La case sur la quelle il tombe et colorié d'une certaine couleur. Les autres joueurs pioche la carte au dessus du paquet correspondant à cette couleur, le joueur dont ces le tours doit répondre correctement à celle ci pour rester sur la case, si il répond mal, il retourne à la case où il était avant de lancé le dé.</dr>
                    <p>Le premier à atteindre le sommet de la pyramide a gagnait le jeu.</dr>
                </article>
                <?php
                    include("includes/aboutAuthors.html");
                ?>
            </section>
        </div>
    </body>
</html>