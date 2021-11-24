<!-- enlever Animal -->
<?php
$animaux=["cat", "cow", "dog", "monkey", "bird"];
unset($animaux[2]);
var_dump($animaux);

// $animaux=array_values($animaux);
// var_dump($animaux);

?>