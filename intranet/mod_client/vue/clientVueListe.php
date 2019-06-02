<?php

$tpl= new Smarty();
$tpl ->assign('login',$_SESSION['prenom'].' '. $_SESSION['nom']);
$listeClients=array();
$i=0;

while ($row =$idRequete ->fetch()){
    $listeClients[$i]['Code_c'] = $row['Code_c'];
    $listeClients[$i]['Nom'] = $row['Nom'];
    $listeClients[$i]['Ville'] = $row['Ville'];
    $listeClients[$i]['Telephone'] = $row['Telephone'];
    $i++;    
}
$tpl ->assign('titreform','liste des clients');
$tpl ->assign('listeClients',$listeClients);
$tpl ->display('mod_client/vue/clientVueListe.tpl');
