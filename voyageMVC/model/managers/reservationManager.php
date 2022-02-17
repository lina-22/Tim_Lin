<?php
require_once("model/classes/reservation.class.php");
class ReservationManager{
    private $lePDO;

    public function __construct($paramPDO){
        $this->lePDO=$paramPDO;
    }

    public function createReservation($objectReservation,$idUser){
        try {
            $connex=$this->lePDO;
            // idReservation 	number 	departureDate 	submitDate 	idDestination 	idUser 
            $sql =$connex->prepare("INSERT INTO Reservations values(null,:seat,:departureDate,NOW(),:idDestination,:idUser)");
            $sql->bindParam(":idUser",$idUser);
            $sql->bindValue(":seat",$objectReservation->getNumber()); // il possible d'invoquer le getter seulement avec bindValue cela ne marche pas avec bindParam
            $sql->bindValue(":departureDate",$objectReservation->getDepartureDate());
            $sql->bindValue("idDestination",$objectReservation->getIdDestination());
            $sql->execute();
            return true;
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        } 
    }

}
?>