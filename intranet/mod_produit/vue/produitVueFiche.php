<?php

$tpl = new Smarty();
$tpl->assign('login', $_SESSION['prenom'] . ' ' . $_SESSION['nom']);



switch ($parametre['action']) {

    case 'F_consulter':
        $row = $idRequete->fetch();
        $tpl->assign('readonly', 'readonly="readonly"');
        $tpl->assign('titreform', 'fiche produit : Consulter');
        $tpl->assign('action', 'F_consulter');
        $tpl->assign('Reference', $row['Reference']);
        $tpl->assign('Designation', $row['Designation']);
        $tpl->assign('quantite', $row['quantite']);
        $tpl->assign('descriptif', $row['descriptif']);
        $tpl->assign('prix_uni_ht', $row['prix_uni_ht']);
        $tpl->assign('Stock', $row['Stock']);
        $tpl->assign('Poids_piece', $row['Poids_piece']);
        $tpl->display('mod_produit/vue/produitVuefiche.tpl');
        break;

    case 'F_modifier':
        $row = $idRequete->fetch();
        $tpl->assign('readonly', '');
        $tpl->assign('titreform', 'fiche produit : Modifi');
        $tpl->assign('action', 'modifier');
        $tpl->assign('Reference', $row['Reference']);
        $tpl->assign('Designation', $row['Designation']);
        $tpl->assign('quantite', $row['quantite']);
        $tpl->assign('descriptif', $row['descriptif']);
        $tpl->assign('prix_uni_ht', $row['prix_uni_ht']);
        $tpl->assign('Stock', $row['Stock']);
        $tpl->assign('Poids_piece', $row['Poids_piece']);
        $tpl->display('mod_produit/vue/produitVuefiche.tpl');
        break;

    case 'F_supprimer':
        $row = $idRequete->fetch();
        $tpl->assign('readonly', 'readonly="readonly"');
        $tpl->assign('titreform', 'fiche produit : Supprimer');
        $tpl->assign('action', 'supprimer');
        $tpl->assign('Reference', $row['Reference']);
        $tpl->assign('Designation', $row['Designation']);
        $tpl->assign('quantite', $row['quantite']);
        $tpl->assign('descriptif', $row['descriptif']);
        $tpl->assign('prix_uni_ht', $row['prix_uni_ht']);
        $tpl->assign('Stock', $row['Stock']);
        $tpl->assign('Poids_piece', $row['Poids_piece']);
        $tpl->display('mod_produit/vue/produitVuefiche.tpl');
        break;
    
    case 'F_ajouter':
        $tpl->assign('readonly', '');
        $tpl->assign('titreform', 'fiche produit : ajouter');
        $tpl->assign('action', 'ajouter');
        $tpl->assign('Reference', '');
        $tpl->assign('Designation', '');
        $tpl->assign('quantite', '');
        $tpl->assign('descriptif', '');
        $tpl->assign('prix_uni_ht', '');
        $tpl->assign('Stock', '');
        $tpl->assign('Poids_piece', '');
        $tpl->display('mod_produit/vue/produitVuefiche.tpl');
        break;
}
