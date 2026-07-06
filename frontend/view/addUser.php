<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>addUser.css"> 
    <link rel="stylesheet" href="<?= URL_CSS1 ?>adminNav.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <div id="adduser">
        <div id="navbarAdmin">
            <div class="navbar">
                <p class="logoPrincipal"><img src="<?= URL_IMAGES ?>logo.png"></p>
                <ul class="navbaritems">
                    <li><a href="">Dashboard</a></li>
                    <li>
                        Books<i class="fas fa-arrow-down"></i>
                        <!-- fas fa-arrow-up -->
                        <ul class="navbarsub-items">
                        <li><a href="">View Books</a></li>
                        <li><a href = "">Add A Book</a></li>
                        </ul>
                    </li>
                
                    <li>
                        Users<i class="fas fa-arrow-down"></i>
                        <ul class="navbarsub-items">
                        <li><a href="">View Users</a></li>
                        <li><a href="">Add A User</a></li>
                        </ul>
                    </li>
                    <li><a href="">View Admin</a></li>
                    <li><a href="">Add An Admin</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </div>
        </div>
        <div id="sideadduser">
            <div class="sideadduserflex">
                <p class="logo"><img src="<?= URL_IMAGES ?>logo.png" ></p>
                <h1>Register A User</h1>
            </div>
            <form action="addUserController.php" method="post">
                  
                <div class="textfield">
                    <label for="name">Username</label>
                    <i class="fas fa-user"></i><input type="text" placeholder="Username" name="name" onclick="changeBorder(1)">
                </div>
                <div class="textfield">
                    <label for="username">Email Address</label>
                    <i class="fas fa-envelope"></i><input type="text" placeholder="Username@gmail.com" name="email" onclick="changeBorder(1)">
                </div>
                <div class="textfield">
                    <label for="password">Password</label>
                    <i class="fas fa-lock"></i><input type="password" placeholder="password" name="password" size="20" onclick="changeBorder(2)">
                    <i class="fas fa-eye"></i>
                </div>

                <input type="submit" name="submit" value="Registring"> 
            </form>
        </div>
    </div>
</body>
</html>