<?php

    // include_once("/wamp64/www/Tpe_6/backend/config/variables.inc.php");
    include (URL_DATABASE."connexion.php");

    class Livre{
        private $codeLivre;
        private $ISBN;
        private $auteur;
        private $titre;
        private $stock;
        private $pu;
        private $photo;
        private $description;
        private $REF;
        
        public function __construct($livre_tab) {
            $this->codeLivre = $livre_tab['codeLivre'];
            $this->ISBN = $livre_tab['ISBN'];
            $this->auteur = $livre_tab['auteur'];
            $this->titre = $livre_tab['titre'];
            $this->stock = $livre_tab['stock'];
            $this->pu = $livre_tab['pu'];
            $this->photo = $livre_tab['photo'];
            $this->description = $livre_tab['description'];
            $this->REF = $livre_tab['REF'];
         }
         public function getCodeLivre() { return $this->codeLivre; }
         public function getISBN() { return $this->ISBN; }
         public function getAuteur() { return $this->auteur; }
         public function getTitre() { return $this->titre; }
         public function getStock() { return $this->stock; }
         public function getPu() { return $this->pu; }
         public function getREF()
         {
            return $this->REF;
         }
         public function getPhoto() { return $this->photo; }
         public function getDescription() { return $this->description; }
         public function setCodeLivre( $codeLivre ) { $this->codeLivre = $codeLivre; }
         public function setISBN( $ISBN ) { $this->ISBN = $ISBN; }
         public function setAuteur( $auteur ) { $this->auteur = $auteur; }
         public function setTitre( $titre ) { $this->titre = $titre; }
         public function setStock( $stock ) { $this->stock = $stock; }
         public function setPu( $pu ) { $this->pu = $pu; }
         public function setPhoto( $photo ) { $this->photo = $photo; }
         public function setREF( $REF )
         {
             $this->REF = $REF;
         }
         public function setDescription( $description ) { $this->description = $description; }
        
    }





        class LivreGestion{
         public static function search($livre)
         {
            $connect = connexion();
            $requete = $connect->prepare("select * from ".DB_LIVRE." where codeLivre = ? or titre = ? ");
            $requete->execute([$livre->getcodeLivre(),$livre->getTitre()]);
            if ($requete->rowCount()>0) {
                return $requete->fetchAll();
            }else{
                return 0;
            } 
         }
         public static function rechercheLivre($typeRech,$termeRech) {
            $connect = connexion(); 
            $query = "select * from ".DB_LIVRE." where ".$typeRech." like '%". $termeRech. "%'" ;
            $result = $connect->prepare($query);
            $result->execute();
            return $result->fetchAll();
         }
         public static function countRechercheLivre($typeRech,$termeRech) {
            $connect = connexion(); 
            $query = "select * from ".DB_LIVRE." where ".$typeRech." like '%". $termeRech. "%'" ;
            $result = $connect->prepare($query);
            $result->execute();
            return $result->rowCount();
         }
         public static function all()
         {
            $connect = connexion();
            $requete = $connect->prepare("select * from ".DB_LIVRE);
            // echo"moi1";
            $requete->execute();
            if ($requete->rowCount()>0) {
                return $requete->fetchAll();
            }else{
                // return ["okay","toto"];
            } 
         }
         public static function getLivre($codeLivre)
         {
            $connect = connexion();
            // echo "moi2";
            $requete = $connect->prepare("select * from ".DB_LIVRE." where codeLivre = ?");
            $requete->execute([$codeLivre]);
            return $requete->fetch();
         }
         public static function countLivre()
         {
             $connect = connexion();
            //  echo "moi3";
            $requete = $connect->prepare("select count(codeLivre) as counts from ".DB_LIVRE);
            $requete->execute();
            return $requete->fetch()['counts'];
         }
         public static function allLivre()
         {
            $connect = connexion();
            //  echo "moi3";
            $requete = $connect->prepare("select * from ".DB_LIVRE);
            $requete->execute();
            return $requete->fetchAll();  
         }
         public static function addLivre(Livre $livre)
         {
            $connect = connexion();
            $requete = $connect->prepare("insert into ".DB_LIVRE." (ISBN,auteur,titre,stock,pu,description,REF,photo) values (?,?,?,?,?,?,?,?) ");
            $requete->execute([$livre->getISBN(),$livre->getAuteur(),$livre->getTitre(),$livre->getStock(),$livre->getPu(),$livre->getDescription(),$livre->getREF(),$livre->getPhoto()]);
         }
         public static function getIn($cookie)
         {
            $connect = connexion();
            if (empty($cookie)) {
                return [];
            }

            $ids = array_map('intval', array_filter(explode(",", $cookie), 'strlen'));
            if (empty($ids)) {
                return [];
            }

            $placeholders = implode(",", array_fill(0, count($ids), '?'));
            $requete = $connect->prepare("select * from ".DB_LIVRE." where codeLivre in (".$placeholders.")");
            $requete->execute($ids);
            return $requete->fetchAll();  
         }
    }
?>