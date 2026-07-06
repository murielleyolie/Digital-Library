<?php
//  $bdserver="localhost";
//  $bdlogin ="root";
//  $bdpwd="";
//  $bd="biblio";
//  $cdes="cdes";
//  $client = "client";
//  $livres="livres";
//  $url="http://localhost/Tpe_6/";
 define("SERVEUR","localhost");
 define("LOGIN","root");
 define("PASS","");
 define("DBNAME","biblio");
 define("DB_LIVRE","livres");
 define("DB_CMDE","cdes");
 define("DB_ADMIN","admin");
 define("DB_CLIENT","client");

 $projectRoot = dirname(__DIR__, 2);
 $projectRoot = str_replace('\\', '/', $projectRoot);
 define("PROJECT_ROOT", $projectRoot);
 define("BACKEND_ROOT", PROJECT_ROOT . "/backend");
 define("FRONTEND_ROOT", PROJECT_ROOT . "/frontend");

 $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
 $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
 $scriptPath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/');
 $segments = array_values(array_filter(explode('/', $scriptPath), 'strlen'));
 $basePath = '/';
 if (!empty($segments)) {
     $basePath = '/' . $segments[0] . '/';
 }
 define("BASE_URL", $scheme . '://' . $host . $basePath);

 define("URL_CSS", FRONTEND_ROOT . "/assets/css/");
 define("URL_CSS1", BASE_URL . "frontend/assets/css/");
 define("URL_JS", FRONTEND_ROOT . "/assets/js/");
 define("URL_JS1", BASE_URL . "frontend/assets/js/");
 define("URL_CONTROLLERS", BACKEND_ROOT . "/controllers/");
 define("URL_CONTROLLERS1", BASE_URL . "backend/controllers/");
 define("URL_DATABASE", BACKEND_ROOT . "/database/");
 define("URL_MODELS", BACKEND_ROOT . "/models/");
 define("URL_VIEW", FRONTEND_ROOT . "/view/");
 define("URL_VIEW1", BASE_URL . "frontend/view/");
 define("URL_FONTAWESOME", BASE_URL . "frontend/assets/fontawesome5/css/all.css");
 define("URL_IMAGES", BASE_URL . "frontend/assets/images/");
?>