<?php
abstract class Animal{
    
    private $taille;
    private $masse;
    private $nom;
    
    // les methods
    public function manger(){
     $this->masse+=1;
    }

    public function dormir(){
      $this->masse-=1;
    }


    public function setTaille($uneTaille){
        if($uneTaille>0){
        $this->taille=$uneTaille;
    }
    }

    public function setMasse($uneMasse){
        if($uneMasse>0){
            $this->masse=$uneMasse;
        }
    }


    public function getTaille():float{
        return $this->taille;
    }
    public function getMasse():float{
        return $this->masse;
    }
    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

?>


<!-- /**
     * Undocumented variable
     *
     * @var string|null
     */
    // les attributs

    its / and ** -->