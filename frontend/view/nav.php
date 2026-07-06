<?php
session_start();
// if(isset( $_SESSION["name"] ))
// {
//    echo $_SESSION["name"];
  
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>navPrincipal.css">
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <div id="navPrincipal">
          <nav class="navbar">
            <p class="logoPrincipal"><img src="<?= URL_IMAGES ?>logo.png" ></p>
            <ul class="navbar-items">
              <li><a href="<?= URL_CONTROLLERS1 ?>welcomeController.php" class="active">Home</a></li>
              <li><a href="<?= URL_CONTROLLERS1 ?>homeController.php">BookStore</a></li>
              <li><a href="<?= URL_CONTROLLERS1 ?>rechercheController.php">SearchBook</a></li>
            </ul>
            <ul class="navbar-items secondDisplay">
              <li><a class="hide" href="<?= URL_CONTROLLERS1 ?>voir_caddieController.php"><i class="fas fa-shopping-cart"></i></a></li>
              <li><a class="hidden" ><i class="fas fa-1"></i><?php echo !isset($_SESSION["name"])?"yolie":$_SESSION["name"]?></a></li>
              <li><a href="<?= URL_CONTROLLERS1 ?>loginController.php"><i class="fas fa-user"></i>LogIn</a></li>
              <li><a href="<?= URL_CONTROLLERS1 ?>inscriptionController.php"><i class="fas fa-user-plus"></i>SignUp</a></li>
              <li><a href="<?= URL_CONTROLLERS1 ?>loginController.php"><i class="fa fa-sign-out-alt" ></i></a></li>
            </ul>
          </nav>
    </div>
    <script src="<?= URL_JS1 ?>navPrincipal.js"></script>
</body>
</html>