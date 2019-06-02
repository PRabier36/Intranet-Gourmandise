<?php

$tpl = new Smarty();

if(isset($parametre['action'])){
    switch ($parametre['action']){
    case 'authentification':
        //on ne passe ici que en cas d'identification invalide !
        $tpl ->assign('message','authentification invalide');
        $tpl ->assign('login',$parametre['f_login']);
        $tpl ->assign('pw',$parametre['f_pw']);
        break;
    }
} else {
    $tpl ->assign('message','');
    $tpl ->assign('login','');
    $tpl ->assign('pw','');
}

$tpl ->display('mod_authentification/vue/authentificationVue.tpl');