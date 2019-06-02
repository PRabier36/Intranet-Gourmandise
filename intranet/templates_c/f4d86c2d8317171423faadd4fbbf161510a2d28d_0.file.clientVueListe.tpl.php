<?php
/* Smarty version 3.1.29, created on 2019-05-17 12:40:34
  from "C:\wamp64\www\Gourmandise\intranet\mod_client\vue\clientVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cdeabc29e8d68_15003894',
  'file_dependency' => 
  array (
    'f4d86c2d8317171423faadd4fbbf161510a2d28d' => 
    array (
      0 => 'C:\\wamp64\\www\\Gourmandise\\intranet\\mod_client\\vue\\clientVueListe.tpl',
      1 => 1558096655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/left.tpl' => 1,
    'file:template/top.tpl' => 1,
  ),
),false)) {
function content_5cdeabc29e8d68_15003894 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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



        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:template/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title"><?php echo $_smarty_tpl->tpl_vars['titreform']->value;?>
</strong>
                                                                      
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="posIcon">code client</th>
                                                <th class="posIcon">Nom</th>
                                                <th class="posIcon">Ville</th>
                                                <th class="posIcon">Telephone</th>
                                                <th class="posIcon">Consulter</th>
                                                <th class="posIcon">Editer</th>
                                                <th class="posIcon">Supprimer</th>
                                                <th class="posIcon">Commander</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['listeClients']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_c_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
                                                <tr>
                                                    <td class="posIcon"><?php echo $_smarty_tpl->tpl_vars['c']->value['Code_c'];?>
</td>
                                                    <td class="posIcon"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom'];?>
</td>
                                                    <td class="posIcon"><?php echo $_smarty_tpl->tpl_vars['c']->value['Ville'];?>
</td>
                                                    <td class="posIcon"><?php echo $_smarty_tpl->tpl_vars['c']->value['Telephone'];?>
</td>
                                                    <td class="posIcon">
                                                        <form action="index.php" method="POST">                                
                                                            <input type="hidden" name="gestion" value="client">
                                                            <input type="hidden" name="action" value="F_consulter">                                                                                                                
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Code_c'];?>
">
                                                            <input type="image" name="F_consulter" src="template/template/build/svg/eye.svg">
                                                        </form>
                                                    </td>
                                                    <td  class="posIcon">
                                                        <form action="index.php" method="POST">                                
                                                            <input type="hidden" name="gestion" value="client">
                                                            <input type="hidden" name="action" value="F_modifier">                                                            
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Code_c'];?>
">
                                                            <input type="image" name="F_modifier" src="template/template/build/svg/pencil.svg">
                                                        </form>
                                                    </td>                        
                                                    <td class="posIcon">
                                                        <form action="index.php" methode="POST">
                                                            <input type="hidden" name="gestion" value="client">
                                                            <input type="hidden" name="action" value="F_supprimer">                                                            
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Code_c'];?>
">
                                                            <input type="image" name="F_supprimer" src="template/template/build/svg/trashcan.svg">
                                                        </form>
                                                    </td>
                                                    <td class="posIcon">
                                                        <form action="index.php" methode="POST">
                                                            <input type="hidden" name="gestion" value="commande">
                                                            <input type="hidden" name="action" value="F_commander">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Code_c'];?>
">
                                                            <input type="image" name="F_commander" src="template/template/build/svg/three-bars.svg">
                                                        </form>
                                                    </td>

                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_local_item;
}
if ($__foreach_c_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_item;
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->


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
