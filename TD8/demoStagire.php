<?php

$stagiaires = [
    0 => ['idStagiaire' => '1',  'prenom' => 'stéphanie',  'nom' => 'belhassen',  'email' => 'stephanie182009@hotmail.fr'],
    1 => ['idStagiaire' => '2',  'prenom' => 'eliott',  'nom' => 'blanc',  'email' => 'eliottblanc@hotmail.fr'],
    2 => ['idStagiaire' => '3',  'prenom' => 'mathias',  'nom' => 'bondoux',  'email' => 'mathiasbondoux@gmail.com'],
    3 => ['idStagiaire' => '4',  'prenom' => 'jaison', 'nom' => 'carbon',  'email' => ''],
    4 => ['idStagiaire' => '5',  'prenom' => 'tiffany',  'nom' => 'drazic',  'email' => 'tiffanydrazic@outlook.fr'],
    5 => ['idStagiaire' => '6',  'prenom' => 'singa', 'nom' => 'hamidou abdou',  'email' => ''],
    6 => ['idStagiaire' => '7',  'prenom' => 'ludovic',  'nom' => 'hanon',  'email' => 'ludovic.hanon@gmail.com'],
    7 => ['idStagiaire' => '8',  'prenom' => 'fahinur', 'nom' => 'haque',  'email' => 'mustfahinur@gmail.com'],
    8 => ['idStagiaire' => '9',  'prenom' => 'brice', 'nom' => 'kabé',  'email' => 'bricekab@ymail.com'],
    9 => ['idStagiaire' => '10',  'prenom' => 'emmanuel', 'nom' => 'kamba',  'email' => 'emmarn@hotmail.fr'],
    10 => ['idStagiaire' => '11',  'prenom' => 'franck', 'nom' => 'kouassi',  'email' => ''],
    11 => ['idStagiaire' => '12',  'prenom' => 'kévin', 'nom' => 'makanda–nsonsa ',  'email' => ''],
    12 => ['idStagiaire' => '13',  'prenom' => 'yoann', 'nom' => 'mannhart',  'email' => 'yoann.mannhart@hotmail.com'],
    13 => ['idStagiaire' => '14',  'prenom' => 'laeticia',  'nom' => 'oliveira',  'email' => 'laeticiaoliveira@gmail.com'],
    14 => ['idStagiaire' => '15',  'prenom' => 'florian', 'nom' => 'ortega',  'email' => 'florian.ortega@hotmail.com'],
    15 => ['idStagiaire' => '16',  'prenom' => 'kibily', 'nom' => 'simaga',  'email' => 'kibilydemba@yahoo.fr'],
    16 => ['idStagiaire' => '17',  'prenom' => 'ibrahim', 'nom' => 'tandjigora', 'email' => ''],
    17 => ['idStagiaire' => '18',  'prenom' => 'louis', 'nom' => 'tran',  'email' => '',],
    18 => ['idStagiaire' => '19',  'prenom' => 'souad', 'nom' => 'trini',  'email' => 'souad.trinib@hotmail.com']
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Stagiaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="container-fluid">

            <h1>Demo Stagiaire</h1>
            <section>
                <div class="row">
                <?php foreach($stagiaires as $unStagiaire){?>
                <div class="card my-2 mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo strtoupper($unStagiaire ["nom"]);?></h5>
                        
                        
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo  ucfirst ($unStagiaire ["prenom"])?></h6>

                        <h6 class="card-subtitle mb-2 text-muted"><?= ucfirst($unStagiaire["prenom"])?></h6>
                         

                        <p class="card-text"></p>
                       
                        <a href="mailto:<?=$unStagiaire["email"]?>" class="card-link"><?= $unStagiaire["email"]?></a>
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




                       
