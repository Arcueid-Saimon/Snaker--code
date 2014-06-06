<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="smallResolution.css" /> <!-- Pour ceux qui ont une résolution inférieure à 1280px -->
        <meta name="viewport" content="width=device-width" />
        <title>Nous Contacter</title>
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
                        <form method="post" action="#">
                        <fieldset>
                            <legend>Vos coordonnées</legend>
                            <p><input type="text" name="name" required /></p>
                            <input type="email" />
                            <input type="tel" />
                        </fieldset>
                        <fieldset>
                            <legend>Votre avis</legend>
                            <p>Comment trouvez vous mon site?<br />
                                    <input type="radio" name="qualité" value="nul" id="nul" /> <label for="nul">Nul</label><br />
                                    <input type="radio" name="qualité" value="passable" id="passable" /> <label for="passable">Passable</label><br />
                                    <input type="radio" name="qualité" value="bien" id="bien" /> <label for="bien">Bien</label><br />
                                    <input type="radio" name="qualité" value="génial" id="génial" /> <label for="génial">Génial</label>
                            </p>
                            <p>
                                <label for="ameliorer">précisez, si vous voulez, votre choix.</label><br />
                                <textarea name="ameliorer" id="ameliorer" rows="10" cols="50"></textarea>
                            </p>
                        </fieldset>
                        <input type="submit" value="Envoyer" />
                        </form>
                </article>
                <?php
                    include("includes/aboutAuthors.html");
                ?>
            </section>
            
        </div>
    </body>
</html>