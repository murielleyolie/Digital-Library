<?php
include(URL_VIEW."nav.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Bibliothèque - catalogue des livres </title>
        <link rel="stylesheet" href="<?= URL_CSS1 ?>recherche.css"> 
    </head>
    <body>
        <div id="recherche">
            <h1>RECHERCHE D'UN LIVRE </h1>
            <form action="rechercheController.php" method="post">
               <p> Choisir le champ de recherche: </p>
                <select name="typeRech">
                    <option value="auteur"> Auteur</option>
                    <option value="titre"> Titre </option>
                    <option value="ISBN"> ISBN</option> </select>
                    <br />
                   <p> Entrer le terme de recherche : </p>
                    <input name="termeRech" class="termetexte" type="text">
                    <br />
                    <input type="submit" name="submit" class="submitButton" value="Rechercher">
            </form>  
        </div> 
        <script src="<?= URL_JS1 ?>recherche.js"></script>
    </body>
</html>
