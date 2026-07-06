<?php
require_once __DIR__ . '/../config/variables.inc.php';
include (URL_MODELS."User.php");
if(isset($_POST['submit'])){
    if((empty($_REQUEST['surname'])||empty($_REQUEST['name'])||empty($_REQUEST['mail'])||empty($_REQUEST['password'])||empty($_REQUEST['confirmpassword'])) || ($_REQUEST['password']!=$_REQUEST['confirmpassword']) || !isset($_REQUEST['checkbox'])){
        die("erreur : il y a des champs vides ! ou le mot de passe ne correspond pas ou vous n'avez pas cochez la petite case");
    }
    else{
        UserGestion::addUser($_REQUEST['surname'].$_REQUEST['name'],$_REQUEST['password'],$_REQUEST['mail']);
        header("Location: ".URL_CONTROLLERS1."loginController.php");
    }
}
include(URL_VIEW."inscription.php");
?>