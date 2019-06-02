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
                                    <form action="index.php" method="post"  class="form-horizontal">
                                        <input type="hidden" name="gestion" value="client">
                                        <input type="hidden" name="action" value="{$action}">
                                        <input type="hidden" name="id" value="{$Code_c}">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Fiche Client: </label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static">{$action}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Code Client</label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static">{$Code_c}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Nom" class=" form-control-label">Nom</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="Nom" name="Nom" class="form-control" value="{$Nom}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Telephone" class=" form-control-label">Telephone</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="Telephone" name="Telephone"  class="form-control" value="{$Telephone}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Adresse" class=" form-control-label">Adresse</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="Adresse" name="Adresse" class="form-control" value="{$Adresse}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="CP" class=" form-control-label">Code Postal</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="CP" name="CP" class="form-control" value="{$CP}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Ville" class=" form-control-label">Code Postal</label></div>
                                            <div class="col-12 col-md-9"><input {$readonly} type="text" id="Ville" name="Ville" class="form-control" value="{$Ville}"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="commentaire" class=" form-control-label">Commentaire</label></div>
                                            <div class="col-12 col-md-9"><textarea {$readonly} name="commentaire" rows="9" class="form-control" value="" >{$commentaire}</textarea></div>
                                        </div>

                                        <input type='button' class="btn btn-lg btn-retour" value='Retour' onclick='location.href = "index.php?gestion=client"'>

                                        {if $action eq 'modifier'}                                            
                                            <input type="submit" class="btn btn-lg btn-valider" value="Valider">
                                        {/if}
                                        {if $action eq 'supprimer'}                                    
                                            <input type="submit"  class="btn btn-lg btn-supprimer" value="Supprimer" F>                                    
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
