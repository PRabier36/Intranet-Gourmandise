<?php

function profilModifier($parametre){
    if ($parametre['pw'] == ''){
    $cnx= getBd();
    $sql="UPDATE vendeur SET Adresse = ?,CP = ?,VilleV = ?,TelephoneV = ? WHERE Code_V=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['id']));
    return $idRequete;
    } else {
    $sql="UPDATE vendeur SET Adresse = ?,CP = ?,VilleV = ?,TelephoneV = ?,pw = ? WHERE Code_V=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['id']));
    return $idRequete;
    }
}
