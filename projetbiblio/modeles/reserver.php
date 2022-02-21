<?php
include("base.php");

$connex= new PDO("mysql:host=$server;dbname=$db",$user,$mdp);

$num=$_REQUEST['num'];
$cote=$_REQUEST['cote'];
// $num=1;
// $cote=121;

$req="call emprunter(:numa,:cot)";
$resultat=$connex->prepare($req);
$resultat->bindValue(':numa',$num);
$resultat->bindValue(':cot',$cote);

$resultat->execute();

echo "1";
?>