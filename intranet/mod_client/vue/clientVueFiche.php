<?php

$tpl = new Smarty();
$tpl->assign('login', $_SESSION['prenom'] . ' ' . $_SESSION['nom']);

$row = $idRequete->fetch();
//var_dump($row);

switch ($parametre['action']) {

    case 'F_consulter':
        $tpl->assign('readonly', 'readonly="readonly"');
        $tpl->assign('titreform', 'fiche client : Consulter'); 
        $tpl->assign('action', 'F_consulter');
        $tpl->assign('Code_c', $row['Code_c']);
        $tpl->assign('Nom', $row['Nom']);
        $tpl->assign('Adresse', $row['Adresse']);
        $tpl->assign('CP', $row['CP']);
        $tpl->assign('Ville', $row['Ville']);
        $tpl->assign('Telephone', $row['Telephone']);
        $tpl->assign('commentaire', $row['commentaire']);
        $tpl->display('mod_client/vue/clientVuefiche.tpl');
        break;

    case 'F_modifier':
        $tpl->assign('readonly', '');
        $tpl->assign('titreform', 'fiche client : Modifier');        
        $tpl->assign('action', 'modifier');
        $tpl->assign('Code_c', $row['Code_c']);
        $tpl->assign('Nom', $row['Nom']);
        $tpl->assign('Adresse', $row['Adresse']);
        $tpl->assign('CP', $row['CP']);
        $tpl->assign('Ville', $row['Ville']);
        $tpl->assign('Telephone', $row['Telephone']);
        $tpl->assign('commentaire', $row['commentaire']);
        $tpl->display('mod_client/vue/clientVuefiche.tpl');
        break;

    case 'F_supprimer':
        $tpl->assign('readonly', 'readonly="readonly"');
        $tpl->assign('titreform', 'fiche client : supprimer');        
        $tpl->assign('action', 'supprimer');
        $tpl->assign('Code_c', $row['Code_c']);
        $tpl->assign('Nom', $row['Nom']);
        $tpl->assign('Adresse', $row['Adresse']);
        $tpl->assign('CP', $row['CP']);
        $tpl->assign('Ville', $row['Ville']);
        $tpl->assign('Telephone', $row['Telephone']);
        $tpl->assign('commentaire', $row['commentaire']);
        $tpl->display('mod_client/vue/clientVuefiche.tpl');
        break;
    
    case 'F_ajouter':
}