<?php
    include (URL_DATABASE."connexion.php");
    class User{
        private $name;
        private $password;
        private $email;
        public function __construct($name,$password,$email)
        {
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
        }
        // public function __construct ($name,$password)
        // {
        //     $this->name = $name;
        //     $this->password = $password;
        // }
        public function getName()
        {
            return $this->name;
        } 
        public function getPassword()
        {
            return $this->password;
        } 
        public function getEmail()
        {
            return $this->email;
        } 
        public function setName($name)
        {
            $this->name = $name;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
    }

    class UserGestion{
         public static function verifyUser($user)
         {

            $connect = connexion();
            $requete = $connect->prepare("select * from ".DB_CLIENT." where email = ? and password = ? ");
            $requete->execute([$user->getEmail(),$user->getPassword()]);
            if ($requete->rowCount()>0) {
                return $requete->fetch()['idClient'];
            }else{
                return 0;
            }
         }
         public static function getUserById($id)
         {
            $connect = connexion();
            $requete = $connect->prepare("select * from ".DB_CLIENT." where idClient = ? ");
            $requete->execute([$id]);
            $tab = $requete->fetch();
            return new User($tab["nomClient"],$tab["password"],$tab["email"]);
         }
        
         public static function countUsers()
         {
            $connect = connexion();
            //  echo "moi3";
            $requete = $connect->prepare("select count(idClient) as counts from ".DB_CLIENT);
            $requete->execute();
            return $requete->fetch()['counts'];        
         }
         public static function allUsers()
         {
            $connect = connexion();
            //  echo "moi3";
            $requete = $connect->prepare("select * from ".DB_CLIENT);
            $requete->execute();
            return $requete->fetchAll();  
         }
         public static function addUser($name,$password,$email)
         {
            $connect = connexion();
            //  echo "moi3";
            $requete = $connect->prepare("insert into ".DB_CLIENT." (nomClient,password,email) values (?,?,?)");
            $requete->execute([$name,$password,$email]);
         }

    }
?>

