<?php

require_once ('mod_produit/modele/produitModele.php');

function vueParDefaut($parametre){
    $idRequete=liste($parametre);
    require_once ('mod_produit/vue/produitVueListe.php');
}

function form_action($parametre){
    switch ($parametre['action']){
        case 'F_ajouter':           
            require_once ('mod_produit/vue/produitVueFiche.php');
            break;
        case 'F_consulter':
            $idRequete= fiche($parametre);
            require_once ('mod_produit/vue/produitVueFiche.php');
            break;
        case 'F_modifier':
            $idRequete= fiche($parametre);
            require_once ('mod_produit/vue/produitVueFiche.php');
            break;
        case 'F_supprimer':
            $idRequete= fiche($parametre);
            require_once ('mod_produit/vue/produitVueFiche.php');
            break;
        case 'modifier':
            $idRequete= ficheModifier($parametre);
            vueParDefaut($parametre);
            break;
        case 'supprimer':
            $idRequete= ficheSupprimer($parametre);
            vueParDefaut($parametre);
            break;
        case 'ajouter':
            $idRequete= ficheAjouter($parametre);
            vueParDefaut($parametre);
            break;
        
    }    
}