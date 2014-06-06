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
                </article>
                <?php
                    include("includes/aboutAuthors.html");
                ?>
            </section>
            
        </div>
    </body>
</html>