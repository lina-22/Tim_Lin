<?php
require("data.php");
// var_dump($covid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
         foreach($covid as $nomPays=>$unPays){
             echo $nomPays. "<br>";
             echo "number =". $unPays["All"]["confirmed"]."<br>";
             echo "morts =". $unPays["All"]["deaths"]."<br>";


             if(isset($unPays ["All"]["population"])){

                echo "population =". $unPays["All"]["population"]."<br>";

             }
             
             echo "<br>";

         }
   
        ?>
    </ul>
</body>
</html>