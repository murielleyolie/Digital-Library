<?php
//  include("/wamp64/www/Tpe_6/backend/config/variables.inc.php");
//  include(URL_DATABASE."connexion.php");
include(URL_VIEW."nav.php");
?>
<html>

<head>
    <title>Librairie - validation de la commande</title>
    <link rel="stylesheet" href="<?= URL_CSS1 ?>voir_caddie.css"> 
</head>

<body>
    <div class='titre'><h1>My Cart <i class="fas fa-bookmark"></i></h1></div>
    <table class='caddie'>
        <tr class="table">
            <td class="photo">photo</td>
            <td class="titre">titre</t>
            <td class="prix">prix</td>
            <td class="qte">quantite</td>
            <td class="Delete">Action</td>
        </tr>
        <?php foreach ($livres as $livre){
            $montant +=$livre['pu']*$tab[$livre['codeLivre']];
            $listeproduits .= ",".$livre['REF'];
            ?>
        <tr class="table-items">
            <td class="class-tdhoto"> <img src= "<?= URL_IMAGES."".$livre['photo'] ?>" /></td>
            <td class="class-titre"> <?= $livre['titre'] ?> </td>
            <td class="class-tdrix"><?= $livre['pu']*$tab[$livre['codeLivre']] ?></td>
            <td class="class-qte"><?= $tab[$livre['codeLivre']] ?></td>
            <td id="action">
                <a href="<?=$_SERVER['PHP_SELF']."?code=".$livre['codeLivre'] ?>" ><i class="fas fa-trash" class="second"></i></a>
            </td>
        </tr>
        <?php }
        $montant+=1000;
        ?>
            
        <tr> <td>Montant </td> <td> <td><?=$montant ?>frcs</tr> 
    </table>
        <form action="<?=URL_CONTROLLERS1?>enregistrerController.php" method="post">
            <input type="hidden" name="montant" value="<?php echo $montant; ?>" />
            <input type="hidden" name="listesproduits" value="<?php echo $listeproduits; ?>" />
            <?php
if (!empty($_COOKIE['monprofil']))
{
$tab_tmp=explode(";;",$_COOKIE['monprofil']);

foreach($tab_tmp as $tmp)
{
list($nom,$val)=explode("=",$tmp);
$tab_profil[$nom]=$val;
}
}
?>
            <br /><label> Nom : </label>
            <input type="text" name="nom" value="<?php echo !isset($tab_profil['nomPrenomCli'])?"yolie":$tab_profil['nomPrenomCli']?>" />
            <br /><label> Adresse : </label>
            <input type="text" name="adresse" value="<?php echo !isset($tab_profil['adresse'])?"murielle@mail.com":$tab_profil['adresse']?>" />
            <input type="submit" name="submit" value="Enregistrer la commande" />
        </form>
    </div>
</body>

</html>
<?php
//  include("/wamp64/www/Tpe_6/backend/config/variables.inc.php");
//  include(URL_DATABASE."connexion.php");
include(URL_VIEW."footer.php");
?>