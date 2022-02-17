<?php
$action= filter_var($_GET["action"]??"404",FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;

require_once("model/managers/reservationManager.php");

switch($action){
    case"processToBasket":
        $idDestination=filter_var($_POST["idDestination"],FILTER_SANITIZE_NUMBER_INT);
        $numberSeat=filter_var($_POST["number"],FILTER_SANITIZE_NUMBER_INT);
        $departureDate=filter_var($_POST["departureDate"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //    if(isset($_SESSION["basket"]))
    //    {
    //        $basket=$_SESSION["basket"];
    //    }
    //    else{
    //        $basket=[];
    //    }
        $basket=$_SESSION["basket"] ?? [];
        $aReservation=new Reservation();
        // On donne une valeur aux attributs de l'objet
        $aReservation->setIdDestination($idDestination);
        $aReservation->setNumber($numberSeat);
        $aReservation->setDepartureDate($departureDate);
        // on ajoute l'objet reservation au panier
        array_push($basket,serialize($aReservation));
        // on remplace ou affecte le panier dans la session par $basket
        $_SESSION["basket"]=$basket;
        header("location:?path=reservation&action=displayBasket");
        break;
    case "displayBasket":
        $basket=$_SESSION["basket"] ?? false;
        require("view/reservation/basket.php");
        break;
    case "emptyBasket":
        unset($_SESSION["basket"]);
        break;
    case "submitBasket":
        //Traitement
        echo"truc";
        $basket=$_SESSION["basket"]?? false;
        if($basket==false){
            $_SESSION["error"]="Your basket is empty";
            //header("location:?path=reservation&action=displayBasket");
        }
        else {
            $idUser=$_SESSION["idUser"] ?? false;
            if($idUser==false){
                $_SESSION["error"]="You must first login or/and register before you submit the basket";
                //header("location:?path=reservation&action=displayBasket");
            }
            else{
                $objectReservationManager= new ReservationManager($monPDO);
                $resultat=true;
                foreach($basket as $lineBasket){
                    $aReservation= unserialize($lineBasket);
                    $sqlOk=$objectReservationManager->createReservation($aReservation,$idUser);
                    if($sqlOk==false){
                        $resultat=false;
                    }
                }
                if($resultat==false){
                    $_SESSION["error"]="A error has occured";
                    //header("location:?path=reservation&action=displayBasket");
                }
                else{
                    $_SESSION["msg"]="Your reservation was submited";
                    unset($_SESSION["basket"]);
                    //header("location:")
                }
            }
        }
        var_dump($_SESSION);
        break;
    case"removeFromBasket":
        $numLine=filter_var($_POST["numLine"],FILTER_SANITIZE_NUMBER_INT);
        $basket=$_SESSION["basket"];
        unset($basket[$numLine]);
        $_SESSION["basket"]=array_values($basket);
        header("location:?path=reservation&action=displayBasket");
        break;
    default :
    require("view/404.php");
}
?>