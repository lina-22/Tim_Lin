<?php 
$title="Formulaire de Contact";
ob_start();
?>

<h1>Formulaire de contact</h1>

<form action="">
 <label for="">Sujet</label>
 <input type="text">
 <label for="">Email</label>
 <input type="email">

</form>

<?php
$content=ob_get_clean();
require("template.php");
?>