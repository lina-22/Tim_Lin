<?php
$action = filter_var($_GET["action"]?? "404",FILTER_SANITIZE_STRING);
require_once("model/managers/languageManager.php");
require_once ("model/managers/countryManager.php");
switch($action){
    case "dashboard":
        require("view/admin/dashboard.php");
        break;
    case "languages":
        $objectManager=new LangageManager($monPDO);
        $languages=$objectManager->fetchAllLanguages();
        require("view/admin/dashboardLanguages.php");
        break;
    case "countries":

        //Recuperer les pays de la bdd
        //Créer countryManager et la classe métier country
        // require le manager et instancier un objetManager
        //Créer une méthode fetchAllCountries
        $objectManager=new CountryManager($monPDO);
        //Invoquer la méthode sur l'objetManager
        $countries=$objectManager->fetchAllCountries();
        //require la vue
        require ("view/admin/dashboardCountries.php");
        break;
    default:
        require ("view/404.php");
}
?>