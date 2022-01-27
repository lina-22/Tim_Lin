<?php
    $action=filter_var($_GET["action"],FILTER_SANITIZE_STRING) ?? "destinations";
    require_once("model/managers/destinationManager.php");
    switch ($action) {
        case "destinations" :
            //Toutes les destinations dans des cards
            //Etape 1 Creation de destinationManager et  la classe destiniation
            //Etape 2 Creation de fetchAllDestinations
            //Etape 3 : instancier un objet destinationManager
            $objectDestinationManager= new DestinationManager($monPDO);
            //Etape 4 : dans une variable recuperer toute les destinations grace a fetchAllDestinations
            $destinations= $objectDestinationManager->fetchAllDestinationsOrderByName();
            
        
            //Etape 5 : Créer la vue qui va afficher les cards et la required ici
            require("view/destination/destinations.php");
        break;
        case "destination":
        
            //Une seul destination sur la page avec un formulaire d'ajout au panier
            $id=filter_var($_GET["id"],FILTER_SANITIZE_NUMBER_INT);
            $objectDestinationManager=new DestinationManager($monPDO);
            $destination=$objectDestinationManager->fetchDestinationByIdDestination($id);
            require("view/destination/destination.php");
            break;    
        default:
        require("view/404.php");
        /*
         * POUR LES IMAGES
        var_dump($_POST);
       var_dump($_FILES);

       $imageOk=true;
       if ($_FILES["image"]["size"] > 1000000) {
           //array_push($_SESSION['error'],"Taille de l'image trop grande (>1Mo)");
           $imageOk=false;
         }
         $imageFileType = strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));
         if($imageFileType!="jpg"&&$imageFileType!="jpeg"&&$imageFileType!="png"&&$imageFileType!="gif")
         {
        //    array_push($_SESSION['error'],"Format de fichier invalide");
           $imageOk=false;
         }
       if($imageOk==false)
       {
           echo "image incorecte";
           //header("location:./?path=admin&action=formAjoutArticle");
           exit;
       }
        $nomImage="image".$id.".jpg";

        echo $nomImage;
        move_uploaded_file($_FILES["image"]["tmp_name"],"asset/images/...");

         */
    }
?>