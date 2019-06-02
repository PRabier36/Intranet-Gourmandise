<?php


session_start();

require_once ('include/configuration.php');

if(!isset($_SESSION['login'])){
    $gestion='authentification';
}elseif (isset ($_REQUEST['gestion'])) {
    $gestion=$_REQUEST['gestion'];
}else {
    $gestion='accueil';
}
//var_dump($_REQUEST);
require_once ('router.php');