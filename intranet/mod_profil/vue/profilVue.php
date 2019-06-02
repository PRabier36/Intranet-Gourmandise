<?php

$tpl = new Smarty();
$tpl->assign('login', $_SESSION['prenom'] . ' ' . $_SESSION['nom']);

$row = $idRequete->fetch();


$tpl->assign('Code_V', $row['Code_V']);
$tpl->assign('NomV', $row['NomV']);
$tpl->assign('Adresse', $row['Adresse']);
$tpl->assign('CP', $row['CP']);
$tpl->assign('Ville', $row['Ville']);
$tpl->assign('Telephone', $row['Telephone']);
$tpl->assign('commentaire', $row['commentaire']);
$tpl->display('mod_client/vue/clientVuefiche.tpl');
        