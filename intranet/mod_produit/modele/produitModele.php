<?php

function liste($parametre){
    $cnx= getBd();
    $sql="SELECT * FROM produit";
    $idRequete = executeRequete($cnx, $sql);
    return $idRequete;
}

function fiche($parametre){
    $cnx= getBd();
    $sql="SELECT * FROM produit WHERE Reference=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['id']));
    return $idRequete;
}

function ficheModifier($parametre){
    $cnx= getBd();
    $sql="UPDATE produit SET Designation = ?,quantite = ?,descriptif = ?,prix_uni_ht = ?,Stock = ?,Poids_piece = ? WHERE Reference=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['Designation'],$parametre['quantite'],$parametre['descriptif'],$parametre['prix_uni_ht'],$parametre['Stock'],$parametre['Poids_piece'],$parametre['id']));
    return $idRequete;
}

function ficheSupprimer($parametre){
    $cnx= getBd();
    $sql="DELETE FROM produit WHERE Reference=?";
    $idRequete = executeRequete($cnx, $sql,array($parametre['id']));
    return $idRequete;
}

function ficheAjouter($parametre){
    $cnx= getBd();
    $sql="INSERT INTO produit (Designation,quantite,descriptifprix_uni_ht,Stock,Poids_piece) VALUES  (?,?,?,?,?,?) ";
    $idRequete = executeRequete($cnx, $sql,array($parametre['Designation'],$parametre['quantite'],$parametre['descriptif'],$parametre['prix_uni_ht'],$parametre['Stock'],$parametre['Poids_piece']));
    return $idRequete;
}
