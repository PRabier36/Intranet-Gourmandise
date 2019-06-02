<?php


function authentificationExiste($parametre){
    $cnx = getBd();
    $sql ="SELECT * FROM vendeur WHERE login = ?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['f_login']));
    return $idRequete;
}
