<?php


/**
 * Methode (function) permettant d'éxécuter une requete simple en l'absence
 * de parametre ou bien une requete préparé dans le cas contraire.
 * 
 * @param type $cnx
 * @param type $sql
 * @param type $parametre
 * @return type
 */

function executeRequete ($cnx,$sql,$parametre = NULL)
{
    if($parametre == NULL)
    {
        $resultat = $cnx -> query($sql);
    } else {
        $resultat = $cnx -> prepare($sql);
        $resultat -> execute($parametre);
    }
    return $resultat;
}

function getBd(){
    $cnx = connexion();
    return $cnx;
}
function connexion()
{
try {
    
    $cnx = new PDO('mysql:host='.SERVEUR.';dbname='.BD,UTILISATEUR,MOTDEPASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $cnx;
    
} catch(PDOException $toto) {
    echo 'echec lors de la connection :' . $toto ->getMessage();
    exit;
}
}
