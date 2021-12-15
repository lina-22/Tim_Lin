<?php
/**
 * Fonction qui permert de ce connecter a la bdd
 *
 * @return PDO|false $connex Un objet PDO qui represente la co au SGBD
 */
function etablirCo()
{
    $urlSGBD="localhost";
    $nomBDD="stagiaire"; // le nom de la BDD
    $loginBDD="root";
    $mdpBDD="";// le mdp est root si on utilise Mamp
    try{
    $connex = new PDO("mysql:host=$urlSGBD;dbname=$nomBDD", "$loginBDD", "$mdpBDD", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $error) {
        echo "Il y a un problème de co a la BDD verifier que la bdd est presente et les lignes 7 à 12 du fichier bdd.php<br>";
        echo $error->getMessage();
    }
    
    return $connex;
}

/**
 * Fonction qui retourne tout les stagiaires de la table
 *
 * @return array|false $resultat un array qui contient les stagiaires
 */
function fetchAllStagiaire(){

    try {
        $connex=etablirCo();
        $sql =$connex->prepare("SELECT * FROM stagiaire ORDER BY idStagiaire");
        
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $resultat = ($sql->fetchAll());
        return $resultat;

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

/**
 * Fonction qui retourne les infos d'un seul stagiaire
 *
 * @param int $unId l'id du stagiaire
 * @return array|false $resultat les infos du stagiaire
 */
function fetchStagiaireById($unId){
    try {
        $connex=etablirCo();
        $sql =$connex->prepare("SELECT * FROM stagiaire WHERE idStagiaire=:id ");
        $sql->bindParam(":id",$unId);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $resultat = ($sql->fetch());
        return $resultat;

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

/**
 * Fonction qui permet d'ajouter un stagiaire
 *
 * @param string $unNom
 * @param string $unPrenom
 * @param string $unEmail
 * @return boolean
 */
function createStagiaire($unNom,$unPrenom,$unEmail){
    try {
        $connex=etablirCo();
        $sql =$connex->prepare("INSERT INTO stagiaire values(null,:nom,:prenom,:email)");
        $sql->bindParam(":nom",$unNom);
        $sql->bindParam(":prenom",$unPrenom);
        $sql->bindParam(":email",$unEmail);
        $sql->execute();
        return true;
  

    } catch (PDOException $error) {
        echo $error->getMessage();
        return false;
    }
}

/**
 * Fonction qui permet de modifier un stagiaire dans la bdd
 *
 * @param int $unId
 * @param string $unNom
 * @param string $unPrenom
 * @param string $unEmail
 * @return boolean
 */
function updateStagiaire($unId,$unNom,$unPrenom,$unEmail){
    try {
    $connex=etablirCo();
    $sql =$connex->prepare("UPDATE stagiaire SET nom=:nom,prenom=:prenom,email=:email WHERE idStagiaire=:id");
    $sql->bindParam(":nom",$unNom);
    $sql->bindParam(":prenom",$unPrenom);
    $sql->bindParam(":email",$unEmail);
    $sql->bindParam(":id",$unId);
    $sql->execute();
    return true;
    }
    catch (PDOException $error) {
        echo $error->getMessage();
        return false;
    }
}

/**
 * Fonction qui supprime un stagiaire
 *
 * @param int $unId l'id du stagiaire
 * @return boolean
 */
function deleteStagiaire($unId){
    try {
        $connex=etablirCo();
        $sql =$connex->prepare("DELETE FROM evaluation WHERE idStagiaire=:id");
        $sql->bindParam(":id",$unId);
        $sql->execute();
        $sql2 =$connex->prepare("DELETE FROM stagiaire WHERE idStagiaire=:id");
        $sql2->bindParam(":id",$unId);
        $sql2->execute();
        return true;
        }
        catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
}

?>