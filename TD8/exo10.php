<!-- Exercice 10 : Parcourir l’array stagiaires -->

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
    16 => ['idStagiaire' => '17',  'prenom' => 'ibrahim', 'nom' => 'tandjigora','email' => '' ], 
    17 => ['idStagiaire' => '18',  'prenom' => 'louis', 'nom' => 'tran',  'email' => '', ], 
    18 => ['idStagiaire' => '19',  'prenom' => 'souad', 'nom' => 'trini',  'email' => 'souad.trinib@hotmail.com']];

// var_dump($stagiaires)


foreach ($stagiaires as $unStagiaire) {
    foreach($unStagiaire as $key=>$value){
        echo "$key = $value <br>";
    }
    echo "<br>";
 }
?>