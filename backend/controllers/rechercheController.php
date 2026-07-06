<?php

    require_once __DIR__ . '/../config/variables.inc.php';
    include(URL_VIEW."recherche.php");
    // include (URL_DATABASE."connexion.php");
    echo "<link rel='stylesheet' href=" .URL_CSS1."recherche.css>";
    include (URL_MODELS."Livre.php");
    if(isset($_POST['submit'])) {
        $typeRech=$_POST['typeRech'];
        $termeRech=$_POST["termeRech"];
        $termeRech= trim($termeRech);
        if (!isset($typeRech) || !isset($termeRech))
        {
            echo 'Vous n\'avez entré aucun critère de recherche. Ressayez !.';
            exit;
        }
        $typeRech = addslashes($typeRech);
        $termeRech = addslashes($termeRech);
        // $connect = connexion();
        // $db = mysql_connect('localhost', 'moi', 'motdepasse'); 
        // mysql_select_db('Biblio', $db);
        // $query = "select * from ".DB_LIVRE." where ".$typeRech." like '%". $termeRech. "%'" ;
        // $result = $connect->prepare($query);
        // $result->execute();
        // $result = mysqlquery ($query); 
        // echo "<pre>";
        // print_r($result->fetchAll());
        // echo "</pre>";
        $num_results = 0;
        // echo $result->columnCount();
        $num_results = LivreGestion::countRechercheLivre($typeRech, $termeRech);
        echo "<div id='recherche'>";
        echo '<p>Nombre de livres trouvés :'. $num_results.'</p>';
        $row =  LivreGestion::rechercheLivre($typeRech, $termeRech);//obtenir chaque
        for ($i=0; $i<$num_results; $i++) // voire boucle while $row = mysql_fetch_array($result)
        {
            echo '<p><strong>'.($i+1).'Titre: </strong></p>';
            // ordre des livres trouvés
            echo htmlspecialchars(stripslashes($row[$i]['titre']));
            echo '</strong ><br />Auteurr::';
            echo stripslashes($row[$i]['auteur']);
            echo '<br />ISBN: ';
            echo stripslashes($row[$i]['ISBN']);
            echo '<br />Qté : ';
            echo stripslashes($row[$i]['stock']);
            echo '<br />Prix: ';
            echo stripslashes($row[$i]['pu']);
            echo '</p>';
        }
        echo "</div>";
        // mysql_close($db);
    }
    // else{
    //     echo "pas submit";

    // }

    include(URL_VIEW."footer.php");

?>