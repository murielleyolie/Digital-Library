<?php
    require_once __DIR__ . '/../config/variables.inc.php';
    // include (URL_DATABASE."connexion.php");
    include (URL_MODELS."Livre.php");
    include (URL_MODELS."Commande.php");
    // echo "je".$_COOKIE['monpanier'];
    // if(isset($_REQUEST["submit"])) {
    //      if(empty($_REQUEST['nom'])||empty($_REQUEST['adresse']))
    //         die("erreur : il y a des champs vides !");
        // echo $_COOKIE['monpanier'];
        // $connect = connexion();
        // $date=date("Y-m-d G:i:s");
        // $_COOKIE['monpanier'][0]=' ';
        // $montant=0;
        // $listeproduits=" ";
        // // echo $_COOKIE['monpanier'];
        // $tab_livre=explode(",",$_COOKIE['monpanier']);
        // $i=0;
        // echo var_dump($tab_livre);
        // // echo "moi";
        // // echo $id;
        // $id=$tab_livre[$i];
        // foreach($tab_livre as $livreId)
        // {
        // // $sql="select * from ".DB_LIVRE." where codeLivre = ?";
        // // $resultat = $connect->prepare($sql);
        // // $resultat->execute([$id]);
        // // $livre=$resultat->fetchAll();
        //     $livre = LivreGestion::getLivre($livreId);
        //     $montant +=$livre['pu'];
        //     $listeproduits .=','.$livre['REF'];
        //     $i++;
        // }
        // $listeproduits[0]=' ';
        // $montant +=1000;
        // // $date =date("Y-m-d G:i:s");
        // // $sql = "insert into ".DB_CMDE." (produits, montantcde, nomPrenomCli, adressecli, dateCde) values 
        // // ('$listeproduits','montant','".$_REQUEST['nom']."','".$_REQUEST['adresse']."','$date')";
        // // mysql_query($sql) ;
        // $commande = new Commande($listeproduits,$montant,$_REQUEST['nom'],$_REQUEST['adresse'],$date);
        // GestionCommandes::insertCdes($commande);
        // setcookie("monprofil","nom=".$_REQUEST['nom'].";;adresse=".$_REQUEST['adresse']."",time()+604800);
        // setcookie("monpanier","",time()-3600);
        // header("Location: ".URL_CONTROLLERS1."homeController.php");
        $montant=0;
        $listeproduits=" ";
        $livres = [];
        $tab = [];

        if (isset($_COOKIE['monpanier']) && trim($_COOKIE['monpanier']) !== "") {
            $cartValue = trim($_COOKIE['monpanier']);
            $cartValue = str_replace(' ', '', $cartValue);
            $cartIds = array_values(array_filter(array_unique(explode(",", $cartValue)), function($value) {
                return $value !== "";
            }));

            if (!empty($cartIds)) {
                $livres = LivreGestion::getIn(implode(",", $cartIds));
                $tab = array_count_values($cartIds);
            }
        }

        include(URL_VIEW."voir_caddie.php");
    // }
?>