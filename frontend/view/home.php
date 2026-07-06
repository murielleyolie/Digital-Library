<?php
include(URL_VIEW."nav.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Librairie - catalogue</title>
        <link rel="stylesheet" href="<?= URL_CSS1 ?>home.css"> 
    </head>
    <body>
        <div id="home">
            <div class="one">
                <div class='titre'><a href='boutique.php'>Boutique <i>Librairie</i></a></div>
                <table class='catalogue'>
                <!-- <tr> -->
                <!-- <td class='liste'>
                        <div class='tdTitre'>Nos livres</div> -->
                <?php

                // foreach ($livres as $livre) {
                //     $livre = new Livre($livre);
                //     print ("-> ");
                //     print ("<a href=" . $_SERVER['PHP_SELF'] . "?id=" . $livre->getCodeLivre() . ">" . $livre->getTitre() . "</a>");
                //     print ("<br/>");
                // }
                // echo count( $tab );
                // echo "<pre>";
                // print_r($tab);
                // echo "</pre>";
                // echo " 1234567890 ";
                // echo "<pre>";
                // print_r($tab[0]);
                // echo "</pre>";
            
                $i = 0;
                while ($i < count($tab)) {
                    echo "<tr><td><a href='".$_SERVER['PHP_SELF']."?id=".$tab[$i]->getCodeLivre()."'>" . $tab[$i]->getISBN() . "</a></td><td><a href=''>" . $tab[$i]->getAuteur() . "</a></td><td><a href=''>" . $tab[$i]->getTitre() . "</a></td><td><a href=''>" . $tab[$i]->getStock() . "</a></td><td><a href=''><img src='" . URL_IMAGES . $tab[$i]->getPhoto() . "' /></a></td><tr> ";
                    //  <td><a href=''>".$tab[$i]["codeLivre"]."</a></td><td>".$tab[$i]["auteur"]."</td><td>".$tab[$i]["titre"]."</td><td>".$tab[$i]["stock"]."</td></tr>";
                    $i++;
                }
                ?>
                <!-- </td> -->
                </table> 
            </div>
            
            <!-- </tr> -->
            <!-- <table>
            <td class='detail'> -->
            <div class="two">
                <!-- ?> -->
                <div class='description'>
                        <?php
                        echo "<div class = millieu>";
                        print ("<div class='tdTitre'>[ref :" . $produit->getREF() . "]</div>");
                        print ("ISBN: " . nl2br($produit->getISBN()) . "<br/><br/>");
                        print ("Auteur : " . nl2br($produit->getAuteur()) . "<br/><br/>");
                        print("Description : <br>".$produit->getDescription()."<br/><br/>");
                        print("Code : ".$produit->getCodeLivre()."<br/><br/>");
                        print ("Stock : " . $produit->getStock() . "<br/><br/>");
                        print ("Prix : " . $produit->getPu() . "<br/><br/><br/>");
                        print("<form action='".URL_VIEW1."ajout_caddie.php' method='post'>");
                        print("<input type='hidden' name='id' value=".$id." />");
                        print("<input type='submit' name='submit' value='ajouter au panier$id' />");
                        print("</form>");
                    echo "</div>";
                    echo "<div>";
                    print("<img src='" . URL_IMAGES . $produit->getPhoto() . "' />");
                    echo "</div>";
                    ?>
                </div>
                <?php
                    // $_COOKIE['monpanier']=0;                    
                    if (isset($_COOKIE['monpanier']))
                    {
                    print("<div class='panier'>");
                    $tab=explode("," ,$_COOKIE['monpanier']);
                    $nblivres=sizeof($tab)-1;
                    print ("Dans votre panier : ".$nblivres." livre(s)<br/>");
                    print("<form action='".URL_CONTROLLERS1."voir_caddieController.php' method='post'>");
                    print("<input type='submit' value='voir la commande'/></form>");
                    print("cookie : {".$_COOKIE['monpanier']."}");
                    print("</div>");
                    }
                ?>
                <!-- <div class="cookies">
                  
                </div> -->
            </div>
        </div>
        <script src="<?= URL_JS1 ?>home.js"></script>
    </body>

</html>
<?php
include(URL_VIEW."footer.php");
?>