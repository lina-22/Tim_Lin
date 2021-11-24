<!-- Exercice 12 : Créer un array qui regroupe plusieurs voyages ensemble -->


<?php

$leVoyage=["pays"=>"Italie","ville"=>"Rome","image"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Collage_Rome.jpg/280px-Collage_Rome.jpg","description"=>"Située au centre-ouest de la péninsule italienne, près de la mer Tyrrhénienne, elle est également la capitale de la région du Latium."];

foreach($leVoyage as $cle=>$valeur){
    if($cle=="image"){
        echo "<img src='$valeur' alt='Rome'> <br>";
    }
    else{
    echo"$cle = $valeur <br>";
    }
}
?>
