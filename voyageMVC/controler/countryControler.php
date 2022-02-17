<?php
$action=filter_var($_GET["action"]??404,FILTER_SANITIZE_STRING);
require ("model/managers/countryManager.php");
switch ($action){
    case"formAdd":
        $role=$_SESSION["role"]??false;
        if($role=="admin"||$role=="superAdmin"){
            require "view/country/formAdd.php";
        }
        else{
            require "view/404.php";
        }
        break;
    case "processFormAdd":
        $role=$_SESSION["role"]??false;
        if($role=="admin"||$role=="superAdmin"){
            $name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
            $population=filter_var($_POST["population"],FILTER_SANITIZE_NUMBER_INT);
            $region=filter_var($_POST["region"],FILTER_SANITIZE_STRING);
            $subregion=filter_var($_POST["subregion"],FILTER_SANITIZE_STRING);
            $capital=filter_var($_POST["capital"],FILTER_SANITIZE_STRING);
            //TODO FLAG
            $objectCountryManager= new CountryManager($monPDO);
            $resultat=$objectCountryManager->createCountry($name,$region,$population,$subregion,$capital);
            if($resultat==true){
                $_SESSION["msg"]="Country added with success";
                header("location:?path=admin&action=countries");
            }
            else{
                $_SESSION["error"]="Failed to add the country";
                header("location:?path=country&action=formAdd");
            }
        }
        else{
            require "view/404.php";
        }

        break;
    case "formUpdate":
        //Recupere l'id d'un pays dans l'url
        break;
    case "processFormUpdate":
        break;
    case "processFormDelete":
        break;
    default :
        require "view/404.php";
}