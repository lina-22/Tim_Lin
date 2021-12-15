<!-- the work no: 1 -->
<?php
$title="Stagiaires";
ob_start();?>
<h1>Stagiaires</h1>
<div class="row mw-auto gy-2">


<?php foreach($lesStagiaires as $unStagiaire){?>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?=mb_strtoupper($unStagiaire["nom"])?></h5>
                <h6 class="card-title"><?=ucfirst($unStagiaire["prenom"])?></h6>
                <h6 class="card-title"><?=mb_strtoupper($unStagiaire["email"])?></h6>
                
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="?path=stagiaire&action=stagiaire&id=<?=$unStagiaire["idStagiaire"]?>" class="card-link btn btn-primary">Consulter</a>
                
            </div>
        </div>
<?php } ?>


</div>


<?php 
$content=ob_get_clean();
require("view/template.php");
?>