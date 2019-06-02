<?php

function liste($parametre){
    $cnx= getBd();
    $sql="SELECT * FROM client";
    $idRequete = executeRequete($cnx, $sql);
    return $idRequete;
}

function fiche($parametre){
    $cnx= getBd();
    $sql="SELECT * FROM client WHERE Code_c=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['id']));
    return $idRequete;
}
function ficheModifier($parametre){
    $cnx= getBd();
    $sql="UPDATE client SET Nom = ?,Adresse = ?,CP = ?,Ville = ?,Telephone = ?,commentaire =? WHERE Code_c=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['Nom'],$parametre['Adresse'],$parametre['CP'],$parametre['Ville'],$parametre['Telephone'],$parametre['commentaire'],$parametre['id']));
    return $idRequete;
}
function ficheSupprimer($parametre){
    $cnx= getBd();
    $sql="DELETE FROM client WHERE Code_c=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['id']));
    return $idRequete;
}