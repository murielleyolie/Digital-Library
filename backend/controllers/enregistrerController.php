<?php 
require_once __DIR__ . '/../config/variables.inc.php';
include URL_MODELS."Livre.php";
include URL_MODELS."Commande.php";
$montant=0;
$listeproduits=" ";
$_COOKIE['monpanier'][0]=' ';
echo"<pre>";
print_r($_COOKIE['monpanier']);
echo"</pre>";
$_COOKIE['monpanier']= str_replace(' ', '' ,$_COOKIE['monpanier']);
$livres = LivreGestion::getIn($_COOKIE['monpanier']);
$tab=array_count_values(explode(",",$_COOKIE['monpanier']));
            

            
if(isset($_POST['submit'])){
    if(empty($_REQUEST['nom'])||empty($_REQUEST['adresse'])){
        die("erreur : il y a des champs vides !");
     }
     else{
        $_COOKIE['monpanier'][0]=' '; 
        extract($_POST);
        echo"<pre>";
        print_r($_POST);
        echo"</pre>";
        $date = date("Y-m-d G:i:s");
      //   $commande = new Commande($listeproduits,$montant*1.0,$_REQUEST['nom'],$_REQUEST['adresse'],$date);
        GestionCommandes::insertCdes($_POST['listesproduits'],$montant*1.0,$_REQUEST['nom'],$_REQUEST['adresse'],$date);
        setcookie("monprofil","nom=".$_REQUEST['nom'].";;adresse=".$_REQUEST['adresse']."",time()+6000000);
        setcookie("monpanier","",time()-878600);
        header("Location: ".URL_CONTROLLERS1."homeController.php");
        
     }
}
?>