
<!-- Parcourir les animaux  -->
<?php
$animaux=["cat", "cow", "dog", "monkey", "bird"];
for($i=0;$i<count($animaux);$i++){
    $unAnimal=$animaux[$i];
    echo $unAnimal. "<br>";
}
?>