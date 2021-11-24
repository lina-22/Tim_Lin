<?php
$morpion=[["O","X","O"],["X","X","O"],["O","X",""]];

$articles = [
 ["id" => 1, "nom" => "t-shirt", "prix" => 10],
 ["id" => 2, "nom" => "robe", "prix" => 50]
];

var_dump($morpion);
var_dump($articles);
echo $morpion[1][2];
echo $morpion[0][2];

echo "<br>";

echo $articles[1]["nom"];
echo "<br>";
echo $articles[1]["prix"];

echo "<br>";
$utilisateur = ["nom" => "Moulin", "prenom" => "Timothée", "id" => 23, "email" => "timomoulin@msn.com"];

foreach($utilisateur as $uneValeur){
    echo "$uneValeur <br>";
}



?>