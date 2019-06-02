<?php
/* Smarty version 3.1.29, created on 2019-05-17 14:54:56
  from "C:\wamp64\www\Gourmandise\intranet\mod_produit\vue\produitVuefiche.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cdecb40a02a49_20353210',
  'file_dependency' => 
  array (
    'f119db6753f29ccda4702beb9039029aca9e9245' => 
    array (
      0 => 'C:\\wamp64\\www\\Gourmandise\\intranet\\mod_produit\\vue\\produitVuefiche.tpl',
      1 => 1558104893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/left.tpl' => 1,
    'file:template/top.tpl' => 1,
  ),
),false)) {
function content_5cdecb40a02a49_20353210 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $_smarty_tpl->tpl_vars['titreform']->value;?>
</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="template/assets/css/normalize.css">
        <link rel="stylesheet" href="template/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="template/assets/css/themify-icons.css">
        <link rel="stylesheet" href="template/assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="template/assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="template/assets/css/lib/datatable/dataTables.bootstrap.min.css">
        <!-- <link rel="stylesheet" hassets/css/normalize.css">/ref="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="template/assets/scss/style.css">
        <link rel="stylesheet" href="template/gourmandise.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

    </head>
    <body>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:template/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div id="right-panel" class="right-panel">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:template/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">                    



                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">                       
                                </div>
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <input type="hidden" name="gestion" value="client">
                                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['Reference']->value;?>
">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Fiche produit: </label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
</p>
                                            </div>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Reference</label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['Reference']->value;?>
</p>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Designation" class=" form-control-label">Designation</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="text-input" name="Designation" placeholder="Designation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Designation']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="telephone" class=" form-control-label">Quantité</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="text-input" name="telephone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['quantite']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Descriptif</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="email" id="email-input" name="descriptif" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['descriptif']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="codePostal" class=" form-control-label">Prix unitaire HT</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="password-input" name="codePostal" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['prix_uni_ht']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="stock" class=" form-control-label">Stock</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="stock" name="stock" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Stock']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="poids" class=" form-control-label">Stock</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="poids" name="poids" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Poids_piece']->value;?>
"></div>
                                        </div>

                                        <input type='button' class="btn btn-lg btn-retour" value='Retour' onclick='location.href = "index.php?gestion=produit"'>

                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'modifier') {?>                                            
                                            <input type="submit" class="btn btn-lg btn-valider" value="Valider">
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'supprimer') {?>                                    
                                            <input type="submit"  class="btn btn-lg btn-supprimer" value="Supprimer" F>                                    
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?>                                    
                                            <input type="submit"  class="btn btn-lg btn-ajouter" value="ajouter" F>                                    
                                        <?php }?>
                                    </form>


                                </div>

                            </div>

                        </div><!-- /#right-panel -->  
                        <!-- Right Panel -->
                    </div>
                </div>
            </div>          


            <?php echo '<script'; ?>
 src="template/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/popper.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/plugins.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/main.js"><?php echo '</script'; ?>
>


            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="template/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>



            <?php echo '<script'; ?>
 type="text/javascript">
                                                $(document).ready(function () {
                                                    $('#bootstrap-data-table-export').DataTable();
                                                });
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>
                (function ($) {
                    "use strict";

                    jQuery('#vmap').vectorMap({
                        map: 'world_en',
                        backgroundColor: null,
                        color: '#ffffff',
                        hoverOpacity: 0.7,
                        selectedColor: '#1de9b6',
                        enableZoom: true,
                        showTooltip: true,
                        values: sample_data,
                        scaleColors: ['#1de9b6', '#03a9f5'],
                        normalizeFunction: 'polynomial'
                    });
                })(jQuery);
            <?php echo '</script'; ?>
>


    </body>
</html>
<?php }
}
