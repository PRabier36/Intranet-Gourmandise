<?php
/* Smarty version 3.1.29, created on 2019-04-19 14:41:06
  from "C:\wamp64\www\Gourmandise\intranet\template\left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cb9de024e3a23_88616625',
  'file_dependency' => 
  array (
    '278e83a448a6b30efc8975d54096e50e2feffcb2' => 
    array (
      0 => 'C:\\wamp64\\www\\Gourmandise\\intranet\\template\\left.tpl',
      1 => 1555684652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9de024e3a23_88616625 ($_smarty_tpl) {
?>

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">



                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Accueil </a>
                        </li>
                        <h3 class="menu-title">Administration</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produits</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="index.php?gestion=produit">-> Liste</a></li>
                                <li><i class="fa fa-table"></i><a href="index.php?gestion=produit">-> Nouveau</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Clients</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="index.php?gestion=client">-> Liste</a></li>
                                <li><i class="fa fa-table"></i><a href="index.php?gestion=client">-> Nouveau</a></li>
                            </ul>
                        </li>
                        <li><a href=""> <i class="menu-icon ti-email"></i>Mon Profil </a></li>

                        <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Historique</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="">-> Toute les commade</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="">-> Commande non validées</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="">-> Commande annulé</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""> <i class="menu-icon ti-email"></i> </a>

                            <a href=""> <i class="menu-icon ti-email"></i>Widgets </a>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>



<?php }
}
