<?php require("data.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

</head>
<body>
    <?php 
    require("fragments/menu.php");
    require("fragments/header.php");
    ?>
    <main class="container-fluid min-vh-100">
        <section>
        <h1>Admin Stagiaires</h1>
        <a href="formAjoutStagiaire.php" class="btn btn-success m-2">Ajouter un Stagiaire</a>
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach($stagiaires as $stagiaire){
                    ?>
                    <tr>
                        <td><?= $stagiaire["nom"];?></td>
                        <td><?= $stagiaire["prenom"];?></td>
                        <td><?= $stagiaire["email"];?></td>
                        <td class="row m-0 justify-content-around">
                            <a class="btn btn-primary col col-md-4 col-lg-3" href="stagiaire.php?id=<?=$stagiaire["idStagiaire"]?>">Consulter</a>
                      

                            <!-- 1st solution -->

                            <a class="btn btn-warning col col-md-4 col-lg-3" href="formModifStagiaire.php?nom=<?=$stagiaire["nom"]?>&prenom=<?=$stagiaire["prenom"]?>&email=<?=$stagiaire["email"]?>">Modifier</a>

                    
                            <!-- 2nd solution -->
                            <a class="btn btn-warning col col-md-4 col-lg-3" href="formModifStagiaire2.php?id=<?=$stagiaire["idStagiaire"]?>">Modifier2</a>


                            <form class="col col-md-4 col-lg-3 p-0" action="TODO" method="POST">
                                <input name="id" type="hidden" value="<?="TODO"?>">
                                <button class="btn btn-danger w-100">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }?>
            </tbody>
        </table>
        </section>
    </main>
    <?php
    require("fragments/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>