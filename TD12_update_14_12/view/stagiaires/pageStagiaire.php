
<!-- the work no: 1 -->
<!-- 14/12/21 add this page -->
<?php
$title="Page Stagiaire";
ob_start();
?>
<h1>Page Stagiaire</h1>
<div>
    Nom: <?=$unStagiaire["nom"]?>
    <br>
    Prenom: <?=$unStagiaire["prenom"]?>
    <br>
    Email: <?=$unStagiaire["email"]?>
    <br>
    
</div>

<?php
$content=ob_get_clean();
require("view/template.php");
?>

<!-- here $content we make it at template page for the body purpose and then we just redirect the page at the template body whatever we write in the ob area it will show at the body; -->

