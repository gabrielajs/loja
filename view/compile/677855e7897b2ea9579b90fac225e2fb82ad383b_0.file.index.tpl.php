<?php
/* Smarty version 3.1.39, created on 2021-10-17 04:03:41
  from 'C:\xampp\htdocs\loja_design\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b847d503444_32669148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '677855e7897b2ea9579b90fac225e2fb82ad383b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\index.tpl',
      1 => 1611624087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecalho-site.tpl' => 1,
  ),
),false)) {
function content_616b847d503444_32669148 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <header>
        <?php $_smarty_tpl->_subTemplateRender("file:cabecalho-site.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>

    <section id="container-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P', false, 'K');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['K']->value => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['K']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['K']->value == 1) {?>class="active" <?php }?>></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
            <div class="carousel-inner">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P', false, 'K');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['K']->value => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                    <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['K']->value == 1) {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['INFO_P']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_slug'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img'];?>
" class="d-block w-100" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
">
                        </a>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
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
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </section>

</body>

</html><?php }
}
