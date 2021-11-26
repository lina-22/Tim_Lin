<?php
require("data.php");
// var_dump($films);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flims</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <div class="container-fluid">

            <h1>Demo flims</h1>
            <section>
                <div class="row">



                <?php foreach($films as $unFlim)
                    foreach($unFilm as $cle=>$valeur){?>
                <div class="card my-2 mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo strtoupper($cle ["Type"]);?></h5>
                        
                        <h6 class="card-subtitle mb-2 text-muted"><?= ucfirst($valeur["movie"])?></h6>
                      
                        <p class="card-text"></p>
                       
                        <a href="mailto:<?=$cle["email"]?>" class="card-link"><?= $cle["email"]?></a>
                    </div>
                </div>
                <?php
                }?>


                </div>
            </section>

        </div>

    </main>
</body>
</html>


