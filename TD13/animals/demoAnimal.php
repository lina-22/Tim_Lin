<?php
require("Chien.class.php");
require("Chat.class.php");
require("Serpent.class.php");
require("Oiseau.class.php");

$unAnimal=new Chien();
$unAnimal->setNom("Rex");
$unAnimal->setTaille(60.5);
$unAnimal->setMasse(40.2);
echo " mon nom est ".$unAnimal->getNom()." ma taille est ".$unAnimal->getTaille()." cm <br>";
var_dump($unAnimal);

$titi=new Oiseau();
$titi->setNom("titi");
$titi->setTaille(7);
$titi->setMasse(8);
$titi->setVole(true);
var_dump($titi);
echo "titi dit ".$titi->chanter()."<br>";
echo "titi est un ".get_class($titi)."<br>";

$unAnimal->manger();
var_dump($unAnimal);
$unAnimal->dormir();
var_dump($unAnimal);
?>