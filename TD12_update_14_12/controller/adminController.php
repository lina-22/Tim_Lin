<!-- the work no: 1 -->

<?php
$action="admin";
if(isset($_GET["action"]))
{
    $action=filter_var($_GET["action"],FILTER_SANITIZE_SPECIAL_CHARS);


}

require("model/bdd.php");
switch($action){
    case "admin":
        require("view/admin/pageAdmin.php");
        break;
        // <!-- 14/12/21 add this page -->
     case "dashboard":
        $lesStagiaires=fetchAllStagiaire();
        require("view/admin/dashboard.php");
        break; 
        default:
        require("view/404.php");
}


?>