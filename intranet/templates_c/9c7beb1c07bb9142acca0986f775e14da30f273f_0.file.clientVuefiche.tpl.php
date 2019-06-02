<?php
/* Smarty version 3.1.29, created on 2019-05-17 14:37:44
  from "C:\wamp64\www\Gourmandise\intranet\mod_client\vue\clientVuefiche.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cdec7389b9187_10557739',
  'file_dependency' => 
  array (
    '9c7beb1c07bb9142acca0986f775e14da30f273f' => 
    array (
      0 => 'C:\\wamp64\\www\\Gourmandise\\intranet\\mod_client\\vue\\clientVuefiche.tpl',
      1 => 1558101235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/left.tpl' => 1,
    'file:template/top.tpl' => 1,
  ),
),false)) {
function content_5cdec7389b9187_10557739 ($_smarty_tpl) {
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
                                    <form action="index.php" method="post"  class="form-horizontal">
                                        <input type="hidden" name="gestion" value="client">
                                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['Code_c']->value;?>
">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Fiche Client: </label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Code Client</label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['Code_c']->value;?>
</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Nom" class=" form-control-label">Nom</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="Nom" name="Nom" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Telephone" class=" form-control-label">Telephone</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="Telephone" name="Telephone"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Telephone']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Adresse" class=" form-control-label">Adresse</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="Adresse" name="Adresse" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Adresse']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="CP" class=" form-control-label">Code Postal</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="CP" name="CP" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CP']->value;?>
"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Ville" class=" form-control-label">Code Postal</label></div>
                                            <div class="col-12 col-md-9"><input <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 type="text" id="Ville" name="Ville" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Ville']->value;?>
"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="commentaire" class=" form-control-label">Commentaire</label></div>
                                            <div class="col-12 col-md-9"><textarea <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 name="commentaire" rows="9" class="form-control" value="" ><?php echo $_smarty_tpl->tpl_vars['commentaire']->value;?>
</textarea></div>
                                        </div>

                                        <input type='button' class="btn btn-lg btn-retour" value='Retour' onclick='location.href = "index.php?gestion=client"'>

                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'modifier') {?>                                            
                                            <input type="submit" class="btn btn-lg btn-valider" value="Valider">
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'supprimer') {?>                                    
                                            <input type="submit"  class="btn btn-lg btn-supprimer" value="Supprimer" F>                                    
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
