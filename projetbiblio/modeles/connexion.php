<?php
include("base.php");
$connex= new PDO("mysql:host=$server;dbname=$db",$user,$mdp);

$email=$_REQUEST['email'];
$mdp=$_REQUEST['mdp'];


$req="select auth(:em,:md) as res";
$resultat= $connex->prepare($req);
$resultat->bindValue(':em',$email);
$resultat->bindValue(':md',$mdp);
$resultat->execute();
$rep="0"; // valeur par défaut correspond à aucun résultat trouvé

// on définit un curseur d'enregistrements
$resultat->setFetchMode(PDO::FETCH_OBJ);

While($ligne= $resultat->fetch())
 {
      $rep=$ligne->res; 
  }
  $resultat->closeCursor();
 echo $rep;
?>