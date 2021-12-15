<?php
require ("Voiture.class.php");
$voiture1=new Voiture();
$voiture1->marque="Fiat";
$voiture1->modele=500;
$voiture1->coleur="rouge";

$voiture2=new Voiture();
$voiture2->marque="Cilo";
$voiture2->modele=4;
$voiture2->coleur="noir";
echo "voiture 1<br>";

var_dump($voiture1);
echo "voiture 2<br>";
var_dump($voiture2);

$voiture1->demarer();
echo "voiture 1<br>";
var_dump($voiture1);
echo "voiture 2<br>";
var_dump($voiture2);

$voiture1->areter();
$voiture2->demarer();
$voiture1->peindre("vert");
$voiture2->peindre("rose");
echo "voiture 1<br>";
var_dump($voiture1);
echo "voiture 2<br>";
var_dump($voiture2);
?>