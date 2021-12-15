<!-- the work no: 1 -->
<?php

$action= "stagiaires";
if(isset($_GET["action"])){
    $action=filter_var($_GET["action"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
require("model/bdd.php");
switch($action){
    // affiche les stagiaire
    case "stagiaires":

       $lesStagiaires=fetchAllStagiaire();
       require("view/stagiaires/pageStagiaires.php");
    
    break;
    // affiche un stagiaire
    // <!-- 14/12/21 add this page -->
    case "stagiaire":
    $id=filter_var($_GET["id"],FILTER_SANITIZE_NUMBER_INT);
    $unStagiaire=fetchStagiaireById($id);
    require("view/stagiaires/pageStagiaire.php");
    // <!-- 14/12/21 add this page -->
    break;
    
    case "formAjout":
        require("view/stagiaires/formAjout.php");
        break;
    case "traitementAjout":
        // var_dump($_POST);
        $nom=filter_var($_POST["nom"], FILTER_SANITIZE_STRING);
        $prenom=filter_var($_POST["prenom"], FILTER_SANITIZE_STRING);
        $email=filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        createStagiaire($nom,$prenom,$email);
        $_SESSION["msg"]="formulaire envoyé";
        header("location:?path=admin&action=dashboard");

     case "formModif":
        $id=filter_var($_GET["id"],FILTER_SANITIZE_SPECIAL_CHARS);
        $unStagiaire=fetchStagiaireById($id);
        require ("view/stagiaires/formModif.php");   
        break;

    default:
    require("view/404.php");
}

?>