<?php
session_start();


//Valeur par défaut de $path
$path="main";
if(isset($_GET["path"])){
    //Si la clé path existe dans la superglobale GET
    // alors $path prend ca valeur
   

   
    $path=filter_var($_GET["path"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

switch($path)
{
    case "main":
        require('controller/controller.php');
        break;
    case "admin":
        require('controller/adminController.php');
        break;
    case "stagiaire":
        require('controller/StagiaireController.php');
        break;
    default :
    require "view/404.php";
}

?>


<!-- note: http://localhost/Timoth%C3%A9e/TD12/?path=main&action=home -->


<!-- it means path = main its take from path = main 
and action may be diffrent like main/admin/stagiaire -->