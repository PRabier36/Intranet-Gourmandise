<?php

require_once ('mod_'.$gestion.'/controleur/'.$gestion.'Controleur.php');

if(isset($_REQUEST['action'])){
    switch ($_REQUEST['action']){
        case 'authentification':
            authentification($_REQUEST);
            break;
        case 'F_modifier': 
            case 'modifier':
            
        case 'F_consulter':
            form_action($_REQUEST);
            break;
        case 'F_supprimer':
            form_action($_REQUEST);
            break;
        case 'F_ajouter':
            form_action($_REQUEST);
            break;
           
        
    }
} else {
    vueParDefaut($_REQUEST);
}