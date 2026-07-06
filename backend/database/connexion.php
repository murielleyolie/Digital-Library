<?php
 require_once __DIR__ . '/../config/variables.inc.php';
function connexion()
{
    try {
        $connexion = new PDO("mysql:host=".SERVEUR.";dbname=".DBNAME."",LOGIN,PASS);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        // echo "connexion reussie";
        return $connexion;
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
   
}
// connexion();
?>
