<?php
include(URL_VIEW."nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>inscription.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="form">
            <form action="<?= URL_CONTROLLERS1 ?>inscriptionController.php" method = "post">
                <h1>Registration Form</h1>
                <div class="sideways">
                    <div class="textfield">
                        <label for="sname">Fisrt Name</label>
                        <input type="text" placeholder="surname" name="surname" required>
                    </div>
                    <div class="textfield">
                        <label for="name">Last Name</label>
                        <input type="text" placeholder="name" name="name" >
                    </div>
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="text" placeholder="name@surname.com" name="mail" required>
                </div>
                <div class="textfield">
                    <label for="password">Password</label>
                    <input type="password" placeholder="password" name="password">
                </div>
                <div class="textfield">
                    <label for="password">Confirm Password</label>
                    <input type="password" placeholder="password" name="confirmpassword">
                </div>
                <div>
                    <input type="checkbox" name="checkbox">I accept the terms of Use & Privacy Policy
                </div>
                <div>
                    <input type="submit"name="submit" value="REGISTER NOW">
                </div>
            </form>
        </div>
        <div class="photo">
            <img src="<?= URL_IMAGES ?>sidpic2.png">
        </div>
    </section>
</body>
</html>
<?php
include(URL_VIEW."footer.php");
?>