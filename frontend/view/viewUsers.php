<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>viewUsers.css"> 
    <link rel="stylesheet" href="<?= URL_CSS1 ?>adminNav.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <div id="viewusers">
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
        <div id="sideviewusers">
            <h1>Modify Or Delete Any User</h1>
            <table>
                <tr>
                    <td>
                        IDENTIFIER
                    </td>
                    <td>
                        NAME
                    </td>
                    <td>
                        PASSWORD
                    </td>
                    <td>
                        EMAIL ADDRESS
                    </td>
                    <td>
                        EDIT
                    </td>
                    <td>
                        DELETE
                    </td>
                </tr>
                <?php
                 $i = 0;
                 $tab = UserGestion::allUsers();
                //  echo "<pre>";
                //   print_r($tab);
                //  echo "<pre>";
                 while ($i < UserGestion::countUsers()) {
                     echo "<tr><td>". $tab[$i]['idClient']. "</td><td>" . $tab[$i]['nomClient'] . "</td><td>" . $tab[$i]['password'] . "</td><td>" . $tab[$i]['email'] . "</td> <td><i class='fas fa-pen'></i></td> <td> <i class='fas fa-trash'></i></td><tr> ";
                     //  <td><a href=''>".$tab[$i]["codeLivre"]."</a></td><td>".$tab[$i]["auteur"]."</td><td>".$tab[$i]["titre"]."</td><td>".$tab[$i]["stock"]."</td></tr>";
                     $i++;
                 }
                ?>
                <!-- <tr>
                    <td>
                        23
                    </td>
                    <td>
                        Murielle
                    </td>
                    <td>
                        murielle2024
                    </td>
                    <td>
                        murielle@24.com
                    </td>
                    <td>
                        <i class="fas fa-pen"></i>
                    </td>
                    <td>
                        <i class="fas fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>
                        23
                    </td>
                    <td>
                        Murielle
                    </td>
                    <td>
                        murielle2024
                    </td>
                    <td>
                        murielle@24.com
                    </td>
                    <td>
                        <i class="fas fa-pen"></i>
                    </td>
                    <td>
                        <i class="fas fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>
                        23
                    </td>
                    <td>
                        Murielle
                    </td>
                    <td>
                        murielle2024
                    </td>
                    <td>
                        murielle@24.com
                    </td>
                    <td>
                        <i class="fas fa-pen"></i>
                    </td>
                    <td>
                        <i class="fas fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>
                        23
                    </td>
                    <td>
                        Murielle
                    </td>
                    <td>
                        murielle2024
                    </td>
                    <td>
                        murielle@24.com
                    </td>
                    <td>
                        <i class="fas fa-pen"></i>
                    </td>
                    <td>
                        <i class="fas fa-trash"></i>
                    </td>
                </tr> -->
            </table>
        </div>
    </div>
    <div id="edituser">
      <form action="editUser.php" method="post">
        <table >
            <tr>
                <td><label for="nom">Name :</label></td>
                <td><input type="text" id="nom" name="nom"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" id="password" name="password"></td>
                <td></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="text" id="email" name="email"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit">
                    <input type="reset" name="reset">
                    <td></td>
                </td>
            </tr> 
  
        </table>
      </form>
    </div>
    <div id="deleteuser">
        <p>Voulez vous vraiment supprimez cette client???<p>
        <form action="deleteUser.php" method="post">
            <p><input type="submit" name="submit">
            <input type="button" name="cancel" value="cancel"></p>
        </form>
    </div>
</body>
</html>