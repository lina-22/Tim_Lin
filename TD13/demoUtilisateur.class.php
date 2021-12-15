<?php
require("Utilisateur.class.php");
$utilisateur1=new Utilisateur();
var_dump($utilisateur1);
$utilisateur1->nom="Moulin";
$utilisateur1->prenom="Timo";
$utilisateur1->email="timothee@msn.com";

var_dump($utilisateur1);


$utilisateur2= new Utilisateur();
$utilisateur2->nom="Truc";
$utilisateur2->prenom="Bidule";
$utilisateur2->email="trucbidule@gmail.com";

var_dump($utilisateur2);

echo $utilisateur1->direBonjour();
echo $utilisateur2->direBonjour();


?>