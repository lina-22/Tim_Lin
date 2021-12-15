<?php
class Oiseau extends Animal{
    private $vole;
    public function chanter(){
        return "ku ku";
    }

    /**
     * Get the value of vole
     */ 
    public function getVole()
    {
        return $this->vole;
    }

    /**
     * Set the value of vole
     *
     * @return  self
     */ 
    public function setVole($vole)
    {
        $this->vole = $vole;

        return $this;
    }
}


?>