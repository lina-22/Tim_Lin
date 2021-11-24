<!-- Exercice 12 : Créer un array qui regroupe plusieurs voyages ensemble -->

<?php

$plusieursVoyage  = [
    0 => ["pays" => "UK", "ville" => "London", "photo" => '<img src="london.jpg" alt="london">', "about" => "this is a very beautiful city"],
    1 => ["pays" => "UK", "ville" => "London", "photo" => '<img src="london.jpg" alt="london">', "about" => "this is a very beautiful city"],
    2 => ["pays" => "UK", "ville" => "London", "photo" => '<img src="london.jpg" alt="london">', "about" => "this is a very beautiful city"], 
    3 => ["pays" => "UK", "ville" => "London", "photo" => '<img src="london.jpg" alt="london">', "about" => "this is a very beautiful city"], 
    4 =>["pays" => "UK", "ville" => "London", "photo" => '<img src="london.jpg" alt="london">', "about" => "this is a very beautiful city"], 
    5 => ["pays" => "UK", "ville" => "London", "photo" => '<img src="london.jpg" alt="london">', "about" => "this is a very beautiful city"], 
];


foreach ($plusieursVoyage as $unVoyage) {
    foreach($unVoyage as $key=>$value){
        echo "$key = $value <br>";
    }
    echo "<br>";
 }
?>
