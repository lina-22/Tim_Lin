<?php
require("data.php");
// var_dump($pays);
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
         foreach($pays as $nomPays=>$unPays){
             echo $nomPays. "<br>";
             echo "country =". $unPays["name"]["common"]."<br>";


             echo "flags = <img src='".$unPays["flags"]["png"]."'/> ";

            //  after img here have one . to close it

            
             echo "flags = <img src='".$unPays ["flags"]["png"]."'/>";

           

             
             
             echo "<br>";

         }
        ?>
    </ul>
</body>
</html>