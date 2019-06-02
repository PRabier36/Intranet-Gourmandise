<?php

require_once ('mod_authentification/modele/authentificationModele.php');

function vueParDefaut($parametre){
    require_once ('mod_authentification/vue/authentificationVue.php');    
}

function authentification($parametre){
    $idRequete = authentificationExiste($parametre);
    $login_tmp = $parametre['f_login'];
    $pw_tmp = $parametre['f_pw'];
    $gauche = "ar30&y%";
    $droite = "tk!@";
    $jeton = hash('ripemd128',"$gauche$pw_tmp$droite");
    $row = $idRequete -> fetch(PDO::FETCH_NUM);
    if(($idRequete ->rowCount()==1) && ($jeton==$row[8])){
        session_start();
        $_SESSION['login']=$login_tmp;
        $_SESSION['code_v']=$row[0];        
        $_SESSION['prenom']=$row[2];
        $_SESSION['nom']=$row[1];
        header('location:index.php');
    } else {
        vueParDefaut($parametre);
    }
}