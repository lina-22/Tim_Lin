<!-- the work no: 2 -->

<?php

$action="home";
if(isset($_GET["action"]))
{
$action=filter_var($_GET["action"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

switch($action){
    case "home":
        require("view/page1.php");
        break;
    case "page2":
        require ("view/page2.php");
        break;
    case "formContact":
        require ("view/formContact.php");
        break;

    case "modifier":
        require ("view/formModif.php");
        break;   
    default :
    require "view/404.php";
}

?>