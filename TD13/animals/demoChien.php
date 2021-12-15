<?php
require("Chien.class.php");

$unAnimal=new Chien();
$unAnimal->setNom("Rex");
$unAnimal->setTaille(60);
$unAnimal->setMasse(40);

echo " mon nom est ".$unAnimal->getNom()." ma taille est ".$unAnimal->getTaille()." cm <br>";

var_dump($unAnimal);

$unAnimal->manger();
var_dump($unAnimal);
$unAnimal->dormir();
var_dump($unAnimal);
?>