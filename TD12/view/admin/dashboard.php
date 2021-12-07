<?php
$title="Deshboard";

ob_start();

?>

<h1>Dashboard</h1>
<table class="table table_striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Moulin</td>
            <td>Tiomothée</td>
            <td>timomulin@msn.com</td>
            <td><a href="#" class="btn bg-info">Modifier</a></td>
        </tr>
    </tbody>
</table>

<?php
$content=ob_get_clean()
;
require("view/template.php");
?>