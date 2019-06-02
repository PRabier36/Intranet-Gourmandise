<?php

require_once ('mod_profil/modele/profilModele.php');

function form_action($parametre){
    $idRequete= profilModifier($parametre);
    require_once ('mod_profil/vue/profilVue.php');
}