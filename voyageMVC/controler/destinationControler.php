<?php
    $action=filter_var($_GET["action"]?? "destinations",FILTER_SANITIZE_STRING) ;
    //require_once("model/managers/destinationManager.php");
    //require_once("model/managers/countryManager.php");
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
        case "formAdd":
            $countryManager=new CountryManager($monPDO);
            $countries = $countryManager->fetchAllCountries();
            var_dump($countries);
            require("view/destination/formAdd.php");  
            break;
        case "processFormAdd":
            //creation d'une vairable role qui si il existe un role dans la session recupere ca valeur sinon il a pour valeur false
            $role=$_SESSION["role"] ?? false;
            //Si le role est admin ou superAdmin alors ...
            if($role=="admin"||$role=="superAdmin"){

            
            $name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
            $description=filter_var($_POST["description"],FILTER_SANITIZE_STRING);
            $openingDate=filter_var($_POST["openingDate"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $closingDate=filter_var($_POST["closingDate"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $duration=filter_var($_POST["duration"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $idCountry=filter_var($_POST["idCountry"],FILTER_SANITIZE_NUMBER_INT);
            $price=filter_var($_POST["price"],FILTER_SANITIZE_NUMBER_FLOAT);
            //ETAPE 1 enregistrer la destination on recupere son id avec lasinsetid
            $objectDestinationManager=new DestinationManager($monPDO);
            $idDestination=$objectDestinationManager->createDestination($name,$description,$openingDate,$closingDate,$price,$duration,$idCountry);
            //ETAPE 2 enregistrer l'image avec lastinsertid
            //deplacer l'image dans le bon dossier avec le bon nom
            $imageManager=new ImageManager($monPDO);
            $idImage=$imageManager->createImage($idDestination,true);
            var_dump($idImage);
          
            move_uploaded_file($_FILES["imageDestination"]["tmp_name"],"asset/images/destinations/image$idImage.jpg");
            if($idImage){
                $_SESSION["msg"]="Destination added";
                header("location:/?path=destination&action=formAdd");
            }
            else{
                $_SESSION["error"]="Failed to add the destination";
                header("location:/?path=destination&action=formAdd");
            }
        }
        //Sinon si le role est autre chose admin ou superAdmin 
        else{
            //on affiche 404
            require("view/404.php");
            // On arete le code PHP
            exit;
        }
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