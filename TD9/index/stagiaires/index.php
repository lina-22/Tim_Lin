<?php
header('Content-Type: text/html; charset=utf-8');
require("data.php");
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
    <main >
    <section class="container-fluid min-vh-100">
        <h1>Les stagiaires </h1>
    <div class="row row-cols-3 row-cols-md-4">
                <?php foreach($stagiaires as $unStagiaire)
                { ?>
                <div class="col my-2">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo mb_strtoupper($unStagiaire["nom"]);?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= ucfirst($unStagiaire["prenom"])?></h6>
                        <p class="card-text"></p>
                     
                        <a href="mailto:<?=$unStagiaire["email"]?>" class="card-link"><?= $unStagiaire["email"]?></a>
                        <a href="stagiaire.php?id=<?=$unStagiaire["idStagiaire"]?>">Consulter</a>
                        <!-- here the question markes for indicate i need to go to find the id of stagiaire -->
                    </div>
                </div>
                </div>
                    <?php } ?>
                    </div>
    </section>
    </main>
    <?php
    require("fragments/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>