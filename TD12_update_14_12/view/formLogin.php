<?php
$title =" Formilaire de Login"; /** title from template */
ob_start();
?>
<h1>Formulaire de Login</h1>
<form action="">
 <label for="">Login</label>
 <input type="text">
 <label for="">Email</label>
 <input type="email">

</form>


<?php
$content = ob_get_clean(); /** content from template */
require ("template.php");
?>