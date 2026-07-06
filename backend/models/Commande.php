<?php

    // include_once("/wamp64/www/Tpe_6/backend/config/variables.inc.php");
    // include (URL_DATABASE."connexion.php");
    class Commande
    {
        private $produits;
        private $montantcde;
        private $nomPrenomCli;
        private $adresseCli;
        private $dateCde;
        public function __construct($produits,$montantcde,$nomPrenomCli,$adresseCli,$dateCde)
        {
            $this->produits=$produits;
            $this->$montantcde = $montantcde;
            $this->nomPrenomCli = $nomPrenomCli;
            $this->adresseCli = $adresseCli;
            $this->$dateCde = $dateCde;
        }
        public function getProduits()
        {
            return $this->produits;
        }
        public function getMontantCde()
        {
            return $this->montantcde;
        }
        public function getNomPrenom()
        {
            return $this->nomPrenomCli;
        }
        public function getAdresseCli()
        {
            return $this->adresseCli;
        }
        public function getDateCde()
        {
            return $this->dateCde;
        }
        public function setProduits($produits)
        {
            $this->produits = $produits;
        }
        public function setMontantCde($montantcde)
        {
            $this->montantcde = $montantcde;
        }
        public function setNomPrenom($nomPrenomCli)
        {
             $this->nomPrenomCli = $nomPrenomCli;
        }
        public function setAdresseCli($adresseCli)
        {
             $this->adresseCli = $adresseCli;
        }
        public function setDateCde($adresseCli)
        {
             $this->dateCde = $adresseCli;
        }
    }
    class GestionCommandes
    {
        public static function insertCdes($produits,$montantcde,$nomPrenomCli,$adresseCli,$dateCde)
        {
            $connect = connexion(); 
            $query = "insert into ".DB_CMDE. "(produits,montantCde,nomPrenomCli,adressecli,dateCde) values (?,?,?,?,?)"; 
            $result = $connect->prepare($query);
            $result->execute([$produits,$montantcde,$nomPrenomCli,$adresseCli,$dateCde]);
        }
        public static function countCommande()
         {
            $connect = connexion();
            //  echo "moi3";
            $requete = $connect->prepare("select count(idCde) as counts from ".DB_CMDE);
            $requete->execute();
            return $requete->fetch()['counts'];        
         }
    }
?> 