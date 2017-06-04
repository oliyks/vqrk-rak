<?php
require_once('funk.php');
session_start();
connect_db();

$page="login";
if (isset($_GET['page']) && $_GET['page']!=""){
        $page=htmlspecialchars($_GET['page']);
}

//include_once('views/head.html');

switch($page){
        case "login":
                logi();
        break;
        case "logout":
                logout();
        break;
        case "failid":
                failid();
        break;
        default:
                include_once('views/login.html');
        break;
}

include_once('views/foot.html');

?>

