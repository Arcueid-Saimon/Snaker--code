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
                    <p>Le snaker est un jeu dédié aux collégiens mais peu sétendre à tous les âges.</dr>
                    <p>c'est un jeu de 2 à 4 joueurs</dr>
                    <p>Il est composé:</dr>
                    <ul>
                        <li>d'un plateau de jeu rétractable.</li>
                        <li>de 4 pions de couleurs différentes.</li>
                        <li>de 10 paquets de 6 cartes chacun (question/ réponse) + une cartes avec les règles.</li>
                        <li>et d'un dé</li>
                    </ul>
                </article>
                <?php
                    include("includes/aboutAuthors.html");
                ?>
            </section>
        </div>
    </body>
</html>