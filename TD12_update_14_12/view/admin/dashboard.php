<!-- the work no: 1 -->

<?php
$title="Deshboard";

ob_start();
?>
<h1>Dashboard</h1>
<?php if (isset($_SESSION["msg"])){?>

  <div>
      <?php $_SESSION["msg"] ?>
  </div>

<?php unset($_SESSION["msg"]); }?>
<a href="?path=stagiaire&action=formAjout" class="btn btn-success">Ajouter un Stagiaire</a>
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
        <?php foreach($lesStagiaires as $unStagiaire)
        {?>
        <tr>
            <td><?=mb_strtoupper($unStagiaire["nom"])?></td>
            <td><?= ucfirst($unStagiaire["prenom"])?></td>
            <td><?=$unStagiaire["email"]?></td>


            <td>
                
           <a href="?path=staigiare&action=formModif&id=<?=$unStagiaire["idStagiaire"]?>" class="btn bg-info col-9">Modifier</a>
            
            <form action="#" method="post">
            <input type="hidden" name="id" value="<?=$unStagiaire["idStagiaire"]?>">
            <button class="btn btn-danger col-9">Supprimer</button>
            </form> 
           </td>


        </tr>
        <?php }?>
    </tbody>
</table>

<?php
$content=ob_get_clean();
require("view/template.php");
?>