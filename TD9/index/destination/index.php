<?php
// header('Content-Type: text/html; charset=utf-8');
require("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

</head>
<body>
    <?php 
    require("fragments/menu.php");
    require("fragments/header.php");
    ?>
    <main >
    <section class="container-fluid min-vh-100">
        <h1>Destinations </h1>
    <div class="row row-cols-3 row-cols-md-4">
                <?php foreach($destinations as $unDestination)
                { ?>
                <div class="col my-2">
                <div class="card h-100" style="width: 18rem;">
                
                 
                
                <img src="<?= $unDestination["image"];?>" class="card-img-top" alt="">
                   


                    <div class="card-body">
                       
                        <h5 class="card-title"><?php echo mb_strtoupper($unDestination["id"]);?></h5>
                        
                        <h6 class="card-subtitle mb-2 text-muted"><?= ucfirst($unDestination["nom"])?></h6>


                        
                        <p class="card-text"> <?= ($unDestination["description"])?>This is the place</p>

                        <a href="destination.php?id=<?=$unDestination["id"]?>">Consulter</a>
                     
                        
                    
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