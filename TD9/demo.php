<?php
// var_dump($_SERVER);
var_dump($_GET);
echo $_GET["pays"]."<br>";
echo $_GET["ville"]."<br>";

$pays=$_GET["pays"];
$ville=$_GET["ville"];

echo"Bienvenue au ".$_GET["pays"]."profitez de votre sejour a ".$_GET["ville"];



?>