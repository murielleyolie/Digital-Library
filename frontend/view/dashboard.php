
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>dashboard.css"> 
    <link rel="stylesheet" href="<?= URL_CSS1 ?>adminNav.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <div id="adminfirst">
        <div id="navbarAdmin">
        <div class="navbar">
            <p class="logoPrincipal"><img src="<?= URL_IMAGES ?>logo.png"></p>
            <ul class="navbaritems">
                <li><a href="<?= URL_CONTROLLERS1 ?>dashboard.php">Dashboard</a></li>
                <li class="oneclick">
                    Books<i class="fas fa-arrow-down"></i>
                    <!-- fas fa-arrow-up -->
                    <ul class="navbarsub-itemsonepanel">
                    <li><a href="<?= URL_CONTROLLERS1 ?>viewBook.php"><i class="fas fa-plus"></i>View Books</a></li>
                    <li><a href = "<?= URL_CONTROLLERS1 ?>addBook.php"><i class="fas fa-plus"></i>Add A Book</a></li>
                    </ul>
                </li>
              
                <li class="twoclick" >
                    Users<i class="fas fa-arrow-down"></i>
                    <ul class="navbarsub-itemstwopanel">
                    <li><a href="<?= URL_CONTROLLERS1 ?>viewUsers.php">View Users</a></li>
                    <li><a href="<?= URL_CONTROLLERS1 ?>addUser.php">Add A User</a></li>
                    </ul>
                </li>
                <li><a href="">View Admin</a></li>
                <li><a href="">Add An Admin</a></li>
                <li><a href="">About Us</a></li>
            </ul>
        </div>
        </div>
        <div id="dashboard">
            <div class="first"> 
            <p><i class="fas fa-chart-bar"></i></p>
                <?php
                echo "<p class='number'>".GestionCommandes::countCommande()."</p>";
                ?>
            </div>
            <div class="first"> 
                <p><i class="fas fa-book"></i></p>
                <?php
                echo "<p class='number'>".LivreGestion::countLivre()."</p>";
                ?>
            </div>
            <div class="first"> 
                <p><i class="fas fa-user"></i></p>
                <?php
                echo "<p class='number'>".AdminGestion::CountAd()."</p>";
                ?>
            </div>
            <div class="first"> 
            <p><i class="fas fa-address-book"></i></p>
                <?php
                echo "<p class='number'>".UserGestion::countUsers()."</p>";
                ?>
            </div>
        
        </div>
    </div>
    <script src="<?= URL_JS1 ?>adminNav.js"></script>
</body>
</html>