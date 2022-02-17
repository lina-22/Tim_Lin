<?php


session_start();
//Si le token est dans la session je le garde sinon on en genere un nouveau
$_SESSION["token"] =$_SESSION["token"] ?? bin2hex(random_bytes(32));
var_dump($_SESSION["token"]);

function my_autoloader($class) {
    if(strstr($class,"Manager")){
        include 'model/managers/' . $class . '.php';
    }
    else{
        include 'model/classes/' . $class . '.class.php';
    }
    
}

spl_autoload_register('my_autoloader');

//Valeur par défaut de $path
$path="main";
if(isset($_GET["path"])){
    //Si la clé path existe dans la superglobale GET
    // alors $path prend ca valeur
    $path=filter_var($_GET["path"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
require("model/bdd.php");
//$connex est un objet PDO (qui represente la co a la bdd)
$monPDO=etablirCo();
switch($path)
{
    case "main":
        require('controler/controler.php');
        break;
    case "user":
        require("controler/userControler.php");
        break;
    case "admin":
        //VERIFICATION DU ROLE
        $role=$_SESSION["role"] ?? false;
        if($role=="admin"||$role=="superAdmin"){
           require("controler/adminControler.php");
        }
        else{
             require "view/404.php";
            exit;
        }
        break;
    case "language":
        require("controler/languageControler.php");
    break;
    case "destination":
        require("controler/destinationControler.php");
    break;
    case "reservation":
        require("controler/reservationControler.php");
        break;
    case "country":
        require ("controler/countryControler.php");
        break;
    default :
    require "view/404.php";
}

?>