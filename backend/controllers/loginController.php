<?php
require_once __DIR__ . '/../config/variables.inc.php';
include (URL_MODELS."User.php");
// $connect = connexion();
// $requete = $connect->prepare("select * from livres ");
// $requete->execute();
// $id = $requete->fetchAll();
// echo "<pre>";
// print_r($id);
// echo "</pre>";
// echo $email;
//toLowerCase;
if(isset($_POST['submit']))
{
  echo "oks";
  //   if(empty($email) || empty($password))
  $email = $_POST['email'];
  $password = $_POST['password'];
  try{
    $id = UserGestion::verifyUser(new User("",$password,$email));
    // echo $id;
    if($id!=0)
    {
      // echo $id;
      $User = UserGestion::getUserById($id);
      // var_dump($User);
      // include_once(URL_VIEW."inscription.php");
      
        echo $User->getName();
              $_SESSION["name"] = $User->getName();
              echo $_SESSION["name"];
              // echo $_SESSION['nom'];
              // while(empty( $_SESSION["nom"] ))
              // {
              //    $_SESSION["nom"] = "";
              // }
              // header("Location: ".URL_CONTROLLERS1."welcomeController.php");

              echo "login approved";
            }
            else{
               echo "Mot de passe ou Nom incorrect";
            }
            //     var_dump($id);
            //     if($id)
            //            echo "Login approved!!!";
            //            $_GLOBALS['email'] = $email;
            //     else{
            //            echo "Login failed";
            //     }
          }catch(Exception $e)
          {
             echo $e->getMessage();
             echo "erreur de communication";
          }

      }
      include(URL_VIEW."login.php");
      // include("../../frontend/assets/css/login.css");
?>