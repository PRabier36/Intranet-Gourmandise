<?php

require_once ('mod_client/modele/clientModele.php');

function vueParDefaut($parametre){
    $idRequete=liste($parametre);
    require_once ('mod_client/vue/clientVueListe.php');
}

function form_action($parametre){
    switch ($parametre['action']){
        case 'F_consulter':
            $idRequete= fiche($parametre);
            require_once ('mod_client/vue/clientVueFiche.php');
            break;
        case 'F_modifier':
            $idRequete= fiche($parametre);
            require_once ('mod_client/vue/clientVueFiche.php');
            break;
        case 'F_supprimer':
            $idRequete= fiche($parametre);
            require_once ('mod_client/vue/clientVueFiche.php');
            break;
        case 'modifier':
            $idRequete= ficheModifier($parametre);
            vueParDefaut($parametre);
            break;
        case 'supprimer':
            $idRequete= ficheSupprimer($parametre);
            vueParDefaut($parametre);
            break;
    }
    
}