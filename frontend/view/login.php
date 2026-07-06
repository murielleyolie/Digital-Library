<?php
require_once __DIR__ . '/../../backend/config/variables.inc.php';
include(URL_VIEW."nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>login.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <div class ="body">
        <form action="" method="post">
            <p class="logo"><img src="<?= URL_IMAGES ?>logo.png" ></p>
                
            <div class="textfield">
                <label for="username">Email Address</label>
                <i class="fas fa-envelope"></i><input type="text" placeholder="Username@gmail.com" name="email" onclick="changeBorder(1)">
            </div>
            <div class="textfield">
                <label for="password">Password</label>
                <i class="fas fa-lock"></i><input type="password" placeholder="password" name="password" size="20" onclick="changeBorder(2)">
                <i class="fas fa-eye"></i>
            </div>

            <input type="submit" name="submit" value="login"> 

            <div class="footer">
                <a href="<?= URL_CONTROLLERS1 ?>inscriptionController.php">Signup</a>
                <a href="">Forgot Password?</a>
            </div>     
        </form>
    </div>
    <script src="<?= URL_JS1 ?>login.js"></script>
</body>
</html>
<?php
include(URL_VIEW."footer.php");
?>