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
        <title>{$titreform}</title>
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

        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>

        {include file='template/left.tpl'}

        <div id="right-panel" class="right-panel">

            {include file='template/top.tpl'}



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
                                        <input type="hidden" name="action" value="{$action}">
                                        <input type="hidden" name="id" value="{$Reference}">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Fiche produit: </label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static">{$action}</p>
                                            </div>
                                        </div>
                                        {if $action neq 'ajouter'}
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Reference</label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static">{$Reference}</p>
                                            </div>
                                        </div>
                                        {/if}
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Designation" class=" form-control-label">Designation</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="text-input" name="Designation" placeholder="Designation" class="form-control" value="{$Designation}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="telephone" class=" form-control-label">Quantité</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="text-input" name="telephone" class="form-control" value="{$quantite}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Descriptif</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="email" id="email-input" name="descriptif" class="form-control" value="{$descriptif}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="codePostal" class=" form-control-label">Prix unitaire HT</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="password-input" name="codePostal" class="form-control" value="{$prix_uni_ht}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="stock" class=" form-control-label">Stock</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="stock" name="stock" class="form-control" value="{$Stock}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="poids" class=" form-control-label">Stock</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="poids" name="poids" class="form-control" value="{$Poids_piece}"></div>
                                        </div>

                                        <input type='button' class="btn btn-lg btn-retour" value='Retour' onclick='location.href = "index.php?gestion=produit"'>

                                        {if $action eq 'modifier'}                                            
                                            <input type="submit" class="btn btn-lg btn-valider" value="Valider">
                                        {/if}
                                        {if $action eq 'supprimer'}                                    
                                            <input type="submit"  class="btn btn-lg btn-supprimer" value="Supprimer" F>                                    
                                        {/if}
                                        {if $action eq 'ajouter'}                                    
                                            <input type="submit"  class="btn btn-lg btn-ajouter" value="ajouter" F>                                    
                                        {/if}
                                    </form>


                                </div>

                            </div>

                        </div><!-- /#right-panel -->  
                        <!-- Right Panel -->
                    </div>
                </div>
            </div>          


            <script src="template/assets/js/vendor/jquery-2.1.4.min.js"></script>
            <script src="template/assets/js/popper.min.js"></script>
            <script src="template/assets/js/plugins.js"></script>
            <script src="template/assets/js/main.js"></script>


            <script src="template/assets/js/lib/data-table/datatables.min.js"></script>
            <script src="template/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
            <script src="template/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
            <script src="template/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
            <script src="template/assets/js/lib/data-table/jszip.min.js"></script>
            <script src="template/assets/js/lib/data-table/pdfmake.min.js"></script>
            <script src="template/assets/js/lib/data-table/vfs_fonts.js"></script>
            <script src="template/assets/js/lib/data-table/buttons.html5.min.js"></script>
            <script src="template/assets/js/lib/data-table/buttons.print.min.js"></script>
            <script src="template/assets/js/lib/data-table/buttons.colVis.min.js"></script>
            <script src="template/assets/js/lib/data-table/datatables-init.js"></script>



            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('#bootstrap-data-table-export').DataTable();
                                                });
            </script>
            <script>
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
            </script>


    </body>
</html>
