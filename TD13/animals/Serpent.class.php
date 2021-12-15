<?php
require_once("Animal.class.php");
class Serpent extends Animal{
    // Les attributs (private)
    private ?bool $estVenimeux;

    // Les méthodes
    public function sifflement(){
        return "Ssssssss";
    }

    /**
     * Get the value of estVenimeux
     */ 
    public function getEstVenimeux()
    {
        return $this->estVenimeux;
    }

    /**
     * Set the value of estVenimeux
     *
     * @return  self
     */ 
    public function setEstVenimeux($estVenimeux)
    {
        $this->estVenimeux = $estVenimeux;

        return $this;
    }
}
?>

Envoyer un message à @Toowax