<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-01-26 02:21:53
         compiled from "view\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9935618745f8a3e8b7655e3-10594853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5199311ea216a230d715e9fc79a49e6ce2502499' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1611624087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9935618745f8a3e8b7655e3-10594853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5f8a3e8ba09413_96262400',
  'variables' => 
  array (
    'NOME_SITE' => 0,
    'VIEW' => 0,
    'PRO' => 0,
    'K' => 0,
    'INFO_P' => 0,
    'P' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8a3e8ba09413_96262400')) {function content_5f8a3e8ba09413_96262400($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['NOME_SITE']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/css/header.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/css/corpo.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/css/style-all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <?php echo $_smarty_tpl->getSubTemplate ("cabecalho-site.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </header>

    <section id="container-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_smarty_tpl->tpl_vars['K'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
 $_smarty_tpl->tpl_vars['K']->value = $_smarty_tpl->tpl_vars['P']->key;
?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['K']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['K']->value==1) {?>class="active" <?php }?>></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner">
                <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_smarty_tpl->tpl_vars['K'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
 $_smarty_tpl->tpl_vars['K']->value = $_smarty_tpl->tpl_vars['P']->key;
?>
                    <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['K']->value==1) {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['INFO_P']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_slug'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img'];?>
" class="d-block w-100" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
">
                        </a>
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Proximo</span>
            </a>
        </div>
    </section>

    <section class="container">
        <h2>Produtos</h2>
        <div class="row row-cols-1 row-cols-md-3">
            <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
?>
                <div class="col mb-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['INFO_P']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_slug'];?>
">
                        <div class="card">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img'];?>
" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h5>
                                <p class="card-text">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['p_valor_br'];?>
</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>

</body>

</html><?php }} ?>
