<?php
session_start();


// $_SESSION["email"]="timomouli@msn.com";

var_dump($_SESSION);

echo "Bonjour" .$_SESSION["email"]."<br>";

if(isset($_SESSION["role"]) && $_SESSION["role"]=="admin")

{
    echo "Lien admin <br>";
}

?>


