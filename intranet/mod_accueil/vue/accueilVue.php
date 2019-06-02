<?php

$tpl = new Smarty;
$tpl ->assign('login',$_SESSION['prenom'].'.'.$_SESSION['nom']);
$tpl->display('mod_accueil/vue/accueilVue.tpl');

