<?php

$tpl= new Smarty();
$tpl ->assign('login',$_SESSION['prenom'].' '. $_SESSION['nom']);
$listeProduits=array();
$i=0;

while ($row =$idRequete ->fetch()){
    $listeProduits[$i]['Reference'] = $row['Reference'];
    $listeProduits[$i]['Designation'] = $row['Designation'];
    $listeProduits[$i]['prix_uni_ht'] = $row['prix_uni_ht'];
    $listeProduits[$i]['Stock'] = $row['Stock'];
    $i++;    
}
$tpl ->assign('titreform','liste des produit');
$tpl ->assign('listeProduits',$listeProduits);
$tpl ->display('mod_produit/vue/produitVueListe.tpl');
