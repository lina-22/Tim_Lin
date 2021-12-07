<?php
session_start();
var_dump($_POST);
// etap 1: verify the data transfered
if(isset($_POST["email"], $_POST["password"]))
{
    // etap: 2 cleaining

    $email=filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $mdp=filter_var($_POST["password"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // etap 3: validated
    // etap: 4 BDD
    if(empty($email)||empty($mdp))
    {
        echo "formulaire non valide";
    }
    else{
        $_SESSION["email"]=$email;
        $_SESSION["mdp"]=$mdp;
        $_SESSION["role"]="admin";

       //ETAPE 5 : Rediriger vers une page
       //Si bug mettre en commentaire
       header("location:index.php");

    }
   
}
else{
    echo "problème de recpetion du form";
}

?>