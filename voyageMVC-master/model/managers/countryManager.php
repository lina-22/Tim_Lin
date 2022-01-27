<?php
require_once ("model/classes/country.class.php");
class CountryManager{
    private $lePDO;

    public function __construct($paramPDO){
        $this->lePDO=$paramPDO;
    }

    public function fetchAllCountries(){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM countries");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Country");
            $resultat = $sql->fetchAll();
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
    }
}
?>