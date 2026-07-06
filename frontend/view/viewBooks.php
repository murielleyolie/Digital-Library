<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>adminNav.css"> 
    <link rel="stylesheet" href="<?= URL_CSS1 ?>viewBooks.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <div id="viewbooks">
    <div id="navbarAdmin">
            <div class="navbar">
                <p class="logoPrincipal"><img src="<?= URL_IMAGES ?>logo.png"></p>
                <ul class="navbaritems">
                    <li>Dashboard</li>
                    <li>
                        Books<i class="fas fa-arrow-down"></i>
                        <!-- fas fa-arrow-up -->
                        <ul class="navbarsub-items">
                        <li>View Books</li>
                        <li>Add A Book</li>
                        </ul>
                    </li>
                
                    <li>
                        Users<i class="fas fa-arrow-down"></i>
                        <ul class="navbarsub-items">
                        <li>View Users</li>
                        <li>Add A User</li>
                        </ul>
                    </li>
                    <li>View Admin</li>
                    <li>Add An Admin</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <div class="bookgrid">
            <!-- $id = $_GET['id']; -->
            <?php
            $i = 0;
            $tab = LivreGestion::allLivre();
            // echo "<pre>";
            // print_r($tab);
            // echo "<pre>";
            while ($i < LivreGestion::countLivre()) {
                echo "<div class='firstbook>
                    <p class='logoPrincipal'><img src='" . URL_IMAGES . $tab[$i]['photo']. "' /></p>
                    <p>".$tab[$i]['description']."</br>".$tab[$i]['auteur']."</br>".$tab[$i]['titre']."</br>".$tab[$i]['ISBN']."</p>
                    <a href=".$_SERVER['PHP_SELF']."?code=".$tab[$i]['codeLivre']."><i class='fas fa-pen'></i></a>
                    <a href=".$_SERVER['PHP_SELF']."?id=".$tab[$i]['codeLivre']."><i class='fas fa-trash'></i></a>
                </div>" ;
                $i++;
            }
            ?>
        </div>
              <!-- <div class="firstbook">
                 <p class="logoPrincipal"><img src="<?= URL_IMAGES ?>livre5.jpg"></p>
                 <p>All infos</p>
                 <i class="fas fa-pen"></i>
                 <i class="fas fa-trash"></i>
             </div> 
             <div class="firstbook">
                 <p class="logoPrincipal"><img src="<?= URL_IMAGES ?>livre5.jpg"></p>
                 <p>All infos</p>
                 <i class="fas fa-pen"></i>
                 <i class="fas fa-trash"></i>
             </div> 
             <div class="firstbook">
                 <p class="logoPrincipal"><img src="<?= URL_IMAGES ?>livre5.jpg"></p>
                 <p>All infos</p>
                 <i class="fas fa-pen"></i>
                 <i class="fas fa-trash"></i>
             </div>   -->
    </div>
    <?php
    $tab=LivreGestion::getLivre($_GET['code']);

    if(isset($_GET['code']))
       echo " <div id='editbook'>
        <form action='editbook.php' method='post'>
            <table >
                <tr>
                    <td><label for='isbn'>ISBN :</label></td>
                    <td><input type='text' id='isbn' name='ISBN' value = ".$tab['ISBN']."></td>
                    <td rowspan='7'>
                        <p class='logo'><img src='" . URL_IMAGES . $tab['photo']. "' /></p>
                        <p><input type='button' name='insert' value='Change Image'></p>
                    </td>
                </tr>
                <tr>
                    <td><label for='auteur'>Auteur :</label></td>
                    <td><input type='text' id='auteur' name='auteur' value = ".$tab['auteur']."></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for='titre'>Titre :</label></td>
                    <td><input type='text' id='titre' name='titre' value = ".$tab['titre']."></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for='stock'>Stock :</label></td>
                    <td><input type='text' id='stock' name='stock' value = ".$tab['stock']."></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for='pu'>Prix Unitaire :</label></td>
                    <td><input type='text' id='pu' name='pu' value = ".$tab['pu']."></td>
                    <td></td>
                </tr>
                <tr>
                    <td> <label for='description'>Description :</label></td>
                    <td><input type='text' id='description' name='description' value = ".$tab['description']."></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' name='submit'>
                        <input type='reset' name='reset'>
                        <td></td>
                    </td>
                </tr> 
    
            </table>
        </form>
        </div>"
    ?>
    <?php
    if(isset($_GET['id']))
    
        echo "<div id='deletebook'>
            <p>Voulez vous vraiment supprimez ce livre???<p>
            <form action='deletelivre.php' method='post'>
                <p><input type='submit' name='submit'>
                <input type='button' name='cancel' value='cancel'></p>
            </form>
        </div>";
    ?>
    <script src="<?= URL_JS1 ?>viewBooks.js"></script>
</body>
</html>