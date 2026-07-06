<?php
    require_once __DIR__ . '/../../backend/config/variables.inc.php';
    
    if(isset($_COOKIE['monpanier']))
            $cookie = $_COOKIE['monpanier'].",". $_REQUEST['id'];
    else{
            $cookie = ",".$_REQUEST['id'] ;
        }
        // header("Set-Cookie: monpanier=$cookie");
        setcookie("monpanier",$cookie,time()+3600,"/","",false);
        $_COOKIE['monpanier'] = $cookie;    
        echo "C'est moi encore une fois -------------".$_COOKIE['monpanier'] ;
        // if (!isset($_GET['id']) && strlen($_COOKIE['monpanier'])<=2  ) {
        //     header("Location: ".URL_VIEW1."ajout_caddie.php?id=".$_REQUEST['id']);
        //     die();
        // }  

        header("Location: ".URL_CONTROLLERS1."homeController.php?id=".$_REQUEST['id']);
    
?>