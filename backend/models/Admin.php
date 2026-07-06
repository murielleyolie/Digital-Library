<?php
  include (URL_DATABASE."connexion.php");
class Admin{
    private $nameAd;
    private $passwordAd;
    private $emailAd;
    public function __construct($nameAd,$passwordAd,$emailAd)
    {
        $this->nameAd = $nameAd;
        $this->passwordAd = $passwordAd;
        $this->emailAd = $emailAd;
    }
    // public function __construct ($name,$password)
    // {
    //     $this->name = $name;
    //     $this->password = $password;
    // }
    public function getNameAd()
    {
        return $this->nameAd;
    } 
    public function getPasswordAd()
    {
        return $this->passwordAd;
    } 
    public function getEmailAd()
    {
        return $this->emailAd;
    } 
    public function setNameAd($nameAd)
    {
        $this->name = $nameAd;
    }
    public function setPassword($passwordAd)
    {
        $this->passwordAd = $passwordAd;
    }
    public function setEmail($emailAd)
    {
        $this->emailAd = $emailAd;
    }
}
class AdminGestion{
   public static function CountAd()
   {
        $connect = connexion();
        //  echo "moi3";
        $requete = $connect->prepare("select count(idAdmin) as counts from ".DB_ADMIN);
        $requete->execute();
        return $requete->fetch()['counts'];
    }
}

?>