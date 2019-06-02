<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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


        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            {include file='template/top.tpl'}



            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">{$titreform}</strong>
                                                                      
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
                                            {foreach from=$listeClients item=c}
                                                <tr>
                                                    <td class="posIcon">{$c.Code_c}</td>
                                                    <td class="posIcon">{$c.Nom}</td>
                                                    <td class="posIcon">{$c.Ville}</td>
                                                    <td class="posIcon">{$c.Telephone}</td>
                                                    <td class="posIcon">
                                                        <form action="index.php" method="POST">                                
                                                            <input type="hidden" name="gestion" value="client">
                                                            <input type="hidden" name="action" value="F_consulter">                                                                                                                
                                                            <input type="hidden" name="id" value="{$c.Code_c}">
                                                            <input type="image" name="F_consulter" src="template/template/build/svg/eye.svg">
                                                        </form>
                                                    </td>
                                                    <td  class="posIcon">
                                                        <form action="index.php" method="POST">                                
                                                            <input type="hidden" name="gestion" value="client">
                                                            <input type="hidden" name="action" value="F_modifier">                                                            
                                                            <input type="hidden" name="id" value="{$c.Code_c}">
                                                            <input type="image" name="F_modifier" src="template/template/build/svg/pencil.svg">
                                                        </form>
                                                    </td>                        
                                                    <td class="posIcon">
                                                        <form action="index.php" methode="POST">
                                                            <input type="hidden" name="gestion" value="client">
                                                            <input type="hidden" name="action" value="F_supprimer">                                                            
                                                            <input type="hidden" name="id" value="{$c.Code_c}">
                                                            <input type="image" name="F_supprimer" src="template/template/build/svg/trashcan.svg">
                                                        </form>
                                                    </td>
                                                    <td class="posIcon">
                                                        <form action="index.php" methode="POST">
                                                            <input type="hidden" name="gestion" value="commande">
                                                            <input type="hidden" name="action" value="F_commander">
                                                            <input type="hidden" name="id" value="{$c.Code_c}">
                                                            <input type="image" name="F_commander" src="template/template/build/svg/three-bars.svg">
                                                        </form>
                                                    </td>

                                                </tr>
                                            {/foreach}
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
