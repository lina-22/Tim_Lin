<?php
$action="admin";
if(isset($_GET["action"]))
{
    $action=filter_var($_GET["action"],FILTER_SANITIZE_SPECIAL_CHARS);


}

switch($action){
    case "admin":
        require("view/admin/pageAdmin.php");
        break;
     case "dashboard":
        require("view/admin/dashboard.php");
        break; 
        default:
        require("view/404.php");
}


?>