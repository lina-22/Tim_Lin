
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
    <div class="text-center mb-4" >
        <h1>Formulaire Stagiaire</h1>
    </div>
        <form action="traitementAjoutStagiaire.php" method="post">

            <div class="col-lg-4 col-md-6 col-10 mx-auto my-3 row">
                <div class="col col-sm-3">
                    <label class="form-label" for="inputNom">Nom</label>
                </div>
                <div class="col col-sm-9">
                    <input class="form-control" type="text" name="nom" id="inputNom" required>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-10 mx-auto my-3 row">
                <div class="col col-sm-3">
                    <label class="form-label" for="inputPrenom">Prenom</label>
                </div>
                <div class="col col-sm-9">
                    <input class="form-control" type="text" name="prenom" id="inputPrenom" required>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-10 mx-auto my-3 row">
                <div class="col col-sm-3">
                    <label class="form-label" for="inputEmail">Email</label>
                </div>
                <div class="col col-sm-9">
                    <input class="form-control" type="email" name="email" id="inputEmail" required>
                </div>
            </div>

            <div class="row col-lg-2 col-md-3 col-6 mx-auto">
                <button class="btn btn-primary">Envoyer</button>
            </div>

        </form>
    </section>
    </main>
    <?php
    require("fragments/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>