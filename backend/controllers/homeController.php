<?php
    require_once __DIR__ . '/../config/variables.inc.php';
    include (URL_MODELS."Livre.php");
    
    if (!isset($_REQUEST['id']))
        $id = 1;
    else
        $id = $_REQUEST['id'];

    $livres = LivreGestion::all();
    $produit = LivreGestion::getLivre($id);
    // echo "<pre>";
    // print_r($produit);
    // echo "</pre>";
    $produit = new Livre($produit);
    $taille = LivreGestion::countLivre();
    // echo "ready";
    // echo"<pre>";
    // print_r($livres);
    // echo "</pre>";
    // echo "----------------------------------------------------------------------------------------";
    $v;
    for ($v = 0; $v < LivreGestion::countLivre(); $v++) {
        $tab[$v] = new Livre($livres[$v]);
    }
    // echo "$taille";
    // echo"<pre>";
    // print_r($tab);
    // echo "</pre>";
    // echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";

    include(URL_VIEW."home.php");
    // include(URL_VIEW."ajout_caddie.php");
?>