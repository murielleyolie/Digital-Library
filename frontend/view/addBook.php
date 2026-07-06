<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>addBook.css"> 
    <link rel="stylesheet" href="<?= URL_CSS1 ?>adminNav.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <div id="addbook">
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
        <div id="sideaddbook">
            <h1>ADD A BOOK</h1>
            <form action="addbookdb.php" method="post">
            <table >
                <tr>
                    <td>
                    <label for="isbn">ISBN :</label>
                    <input type="text" id="isbn" name="ISBN"></td>
                    <td class="elementcenter" rowspan="7">
                        <p class="logo"><img src="<?= URL_IMAGES ?>livre5.jpg" ></p>
                        <p><input type="button" name="insert" value="Change Image"></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="auteur">Auteur :</label>
                    <input type="text" id="auteur" name="auteur"></td>

                </tr>
                <tr>
                    <td><label for="titre">Titre :</label>
                    <input type="text" id="titre" name="titre"></td>

                </tr>
                <tr>
                    <td><label for="stock">Stock :</label>
                    <input type="text" id="stock" name="stock"></td>

                </tr>
                <tr>
                    <td><label for="pu">Prix Unitaire :</label>
                    <input type="text" id="pu" name="pu"></td>

                </tr>
                <tr>
                    <td> <label for="description">Description :</label>
                    <input type="text" id="description" name="description"></td>

                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit">
                        <input type="reset" name="reset">
                    </td>
                </tr> 
    
            </table>
        </form>
        </div>
    </div>
</body>
</html>