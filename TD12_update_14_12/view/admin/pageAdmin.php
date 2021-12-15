
<!-- the work no: 1 -->
<?php
$title ="Page Admin";
ob_start();

?>

<h1>Page Admin</h1>

<p>Ceci est une page admin</p>

<?php
$content=ob_get_clean();
require("view/template.php");

?>