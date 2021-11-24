<!-- Parcourir votre array (foreach)  -->
<?php

$uneHabitante = ["nom" => "Haque", "prenom" => "Lina", "ville" => "GargesLesGonesse", "email" => "mustfahinur@gmail.com"];


foreach($uneHabitante as $cle => $uneValeur){

        echo "$cle = $uneValeur <br>";
  
    echo "<br>";
}


?>