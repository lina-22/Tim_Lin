<?php
var_dump($_GET);
require ("data.php");


function rechercheDestanation($arrayDestinations,$unId)
{
    foreach($arrayDestinations as $unDestination){
        //Si l'id($unId) que l'ont recherche corespond a l'id du stagiaire
        //que on est entrain de parcourir($unStagiaire["idStagiaire]) 
        //alors on retourne le stagiaire
        if($unId==$unDestination["id"])
        {
            return $unDestination;
        }
    }
}

//Si le paramètre id n'est pas definit
if(isset($_GET["id"])==false){
    echo "Pas de id dans votre URL";
    //on stop le code
    exit;
}

//on invoque le fonction rechercheStagiaire
$ledestinations=rechercheDestanation($destinations,$_GET["id"]);
// var_dump($destinations);
// $stagiaire6=rechercheStagiaire($stagiaires,6);
// var_dump($stagiaire6);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

</head>
<body>


    <?php 
    require("fragments/menu.php");
    require("fragments/header.php");
    ?>
    <main class="container-fluid vh-100">

        <section>
           
            <h1><?=$ledestinations["id"]?></h1><h1><?=$ledestinations["nom"]?></h1>

        </section>

    </main>




    <?php
    require("fragments/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



<!-- section and php -->