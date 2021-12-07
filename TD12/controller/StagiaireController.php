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
    case "stagiaire";
    require("");
    break;
    default:
    require("view/404.php");
}


?>