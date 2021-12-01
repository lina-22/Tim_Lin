<?php
require("data.php");
var_dump($_POST);

$nom=filter_var($_POST["nom"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

function ajoutStagiaire($arrayStagiaire,$unStagiaire)
{
    $arrayStagiaire[]=$unStagiaire;
    return $arrayStagiaire;
}

echo "stagiaires Avant ajout <br>";
var_dump($stagiaires);

if(isset($_POST["nom"],$_POST["prenom"],$_POST["email"]))
{
    $leStagiaire=["nom"=>$_POST["nom"],"prenom"=>$_POST["prenom"],"email"=>$_POST["email"]];
    //Note l'id est incrémenté automatiquement par le SGBD
    $listeStagiaires=ajoutStagiaire($stagiaires,$leStagiaire);
   
    echo "stagiaires Après ajout <br>";
    var_dump($listeStagiaires);
}
?>