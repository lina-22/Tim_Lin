<?php
class Voiture{
    // les attributs
    public $marque;
    public $modele;
    public $coleur;
    public $estDemarer;
    // les methods
    public function demarer(){
     $this->estDemarer=true;
    }

    public function areter(){
      $this->estDemarer=false;
    }


public function peindre($uneColoeur){
    $this->coleur=$uneColoeur;
}
}
?>

