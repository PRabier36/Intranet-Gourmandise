<?php
/* Smarty version 3.1.29, created on 2019-05-16 12:47:06
  from "C:\wamp64\www\Gourmandise\intranet\mod_authentification\vue\authentificationVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cdd5bcaacf175_38631742',
  'file_dependency' => 
  array (
    'a9a28d0186e6a837fded046202325e78c6aeaf92' => 
    array (
      0 => 'C:\\wamp64\\www\\Gourmandise\\intranet\\mod_authentification\\vue\\authentificationVue.tpl',
      1 => 1558010815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd5bcaacf175_38631742 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Authentification</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="template/assets/css/normalize.css">
        <link rel="stylesheet" href="template/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="template/assets/css/themify-icons.css">
        <link rel="stylesheet" href="template/assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="template/assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" hssets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="template/assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->
    </head>
    <body>
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-form">                      

                        <div class="card-header">

                            <img src="template/Capture.PNG">
                            <strong>Authentification</strong>

                        </div>
                        <div class="card-body card-block">
                            <form action="index.php" method="POST" class="form-horizontal">                                                               
                                <div class="row form-group">                                    
                                    <div class="col col-md-3"><label for="f_login" class=" form-control-label">Pseudo :</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="f_login" name="f_login" placeholder="Enter Pseudo..." class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="f_pw" class=" form-control-label">Password :</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="f_pw" name="f_pw" placeholder="Enter Password..." class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pw']->value;?>
"></div>
                                    <div><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
                                </div>
                                <div>
                                    <input type="hidden" name="gestion" value="authentification">
                                    <input type="hidden" name="action" value="authentification">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Validier
                                    </button>                            
                                </div>                                
                                                              
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }
}
