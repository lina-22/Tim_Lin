<?php
$voyages=[["pays"=>"Italie","ville"=>"Rome","image"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Collage_Rome.jpg/280px-Collage_Rome.jpg","description"=>"Située au centre-ouest de la péninsule italienne, près de la mer Tyrrhénienne, elle est également la capitale de la région du Latium."],
["pays"=>"Japon","ville"=>"Tokyo","image"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Tokyo_Montage_2015.jpg/280px-Tokyo_Montage_2015.jpg","description"=>"Elle est la plus peuplée des préfectures du Japon, avec plus de 13 831 421 habitants intra-muros en 2018 et 42 794 714 dans l'agglomération."]
];

foreach($voyages as $unVoyage){
    foreach($unVoyage as $key=>$value){
        if($key=="image")
        {
            echo "<img src='$value'> <br>";
        }
        else{
        echo "$key = $value <br>";
        }
    }
    echo "<br>";
}

?>