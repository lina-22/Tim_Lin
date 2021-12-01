<?php
require("data.php");
/**
 * Fonction qui permert 
 * de recuperer un stagiaire par son id
 *
 * @param array $arrayDeStagiaires La liste de Stagiaires
 * @param int $idRechercher L'id du stagiaire
 * @return array Les infos du stagiaire dans un array associatif
 */
function rechercheUnStagiaire($arrayDeStagiaires,$idRechercher){
    foreach($arrayDeStagiaires as $unStagiaire)
    {
    if($unStagiaire['idStagiaire']==$idRechercher)
    {
        return $unStagiaire;
    }
    }
}
if(isset($_GET["nom"]))
{
//On recupere l'id du stagiaire dans l'url
$idDuStagiaire=$_GET["nom"];

// ****i need to store at get anything at GET it can be id/nom/prenom anything and it will be save at ural after file name ? id/nom/prenom

//On invoque rechercheUnStagiaire pour recuperer dans $leStagiaire
//Seulement les informations d'un stagiaire qui corespond a l'id
$leStagiaire=rechercheUnStagiaire($stagiaires,$idDuStagiaire);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

</head>
<body>
    <?php 
    require("fragments/menu.php");
    require("fragments/header.php");
    ?>
    <main class="container-fluid min-vh-100">
        <h2>Fiche Stagiaire</h2>
        <ul>
            <?php if(isset($_GET["nom"]))
            {?>
            <li>Nom : <?=mb_strtoupper($leStagiaire["nom"]); ?></li>
            <li>Prenom : <?=ucfirst($leStagiaire["prenom"])?></li>
            <li>Email : <?=$leStagiaire["email"]?></li>
            <?php } 
            else { echo "Il n'y as pas d'ID dans l'URL";}
            ?>
        </ul>
    </main>
    <?php
    require("fragments/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>