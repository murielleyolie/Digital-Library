<?php
   require_once __DIR__ . '/../config/variables.inc.php';
   // include (URL_DATABASE."connexion.php");
   include (URL_MODELS."Livre.php");
   include (URL_MODELS."Commande.php");
$montant=0;
$listeproduits=" ";
$_COOKIE['monpanier'][0]=' ';
$_COOKIE['monpanier']= str_replace(' ', '' ,"1");
$livres = LivreGestion::getIn($_COOKIE['monpanier']);
$tab=array_count_values(explode(",",$_COOKIE['monpanier']));
            

            
if(isset($_POST['submitcaddie'])){
    if(empty($_REQUEST['nom'])||empty($_REQUEST['adresse'])){
        die("erreur : il y a des champs vides !");
     }
     else{
        $date=date("Y-m-d G:i:s");
        $_COOKIE['monpanier'][0]=' '; 
        extract($_POST);
        $montant +=1000;
        $date = date("Y-m-d G:i:s");
        $commande = new Commande($listeproduits,$montant,$_REQUEST['nom'],$_REQUEST['adresse'],$date);
        GestionCommandes::insertCdes($commande);
        setcookie("monprofil","nom=".$_REQUEST['nom'].";;adresse=".$_REQUEST['adresse']."",time()+604800);
        setcookie("monpanier","",time()-3600);
        header("Location: ".URL_CONTROLLERS1."homeController.php");
     }
}

include(URL_VIEW."voirCaddie.php");
?>

