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
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Mon profil</label></div>                                            
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Code Client</label></div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static">{$Code_V}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="telephone" class=" form-control-label">Nom</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="telephone" placeholder="Text" class="form-control" value="{$NomV}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="telephone" class=" form-control-label">Telephone</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="telephone" placeholder="Text" class="form-control" value="{$TelephoneV}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Addresse" class=" form-control-label">Adresse</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="adresse" name="adresse" placeholder="Enter Email" class="form-control" value="{$Adresse}"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="codePostal" class=" form-control-label">Code Postal</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="codePostal" name="codePostal" class="form-control" value="{$CP}"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password" class=" form-control-label">Mots de passe</label></div>
                                            <div class="col-12 col-md-9"><input type="password" name="pw" id="pw" class="form-control" value="{$pw}"></div>
                                        </div>
                                    </form>


                                </div>

                            </div>

                        </div><!-- /#right-panel -->
                        <div class="col-lg-6">

                        </div>

                        <div class="col-12 card card-body card-block" >
                            <div class="col-md-3 ">
                                <form method="POST" action="index.php">                                    
                                    <input type='button' class="btn btn-lg btn-retour" value='Retour' onclick='location.href = "index.php?gestion=client"'>
                                </form>                                
                                <form method="POST" action="index.php">
                                    <input  class="btn btn-lg btn-modifier" value="Modifier" onclick='location.href = "index.php?getion=client"'>
                                </form>                                
                            </div> 
                        </div> 


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
