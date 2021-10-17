<?php
/* Smarty version 3.1.39, created on 2021-10-17 04:03:45
  from 'C:\xampp\htdocs\loja_design\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b84813e0f00_34614544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bcee40dfb63d52c521358e8b955d091b610e524' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\home.tpl',
      1 => 1632426391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecalho-site.tpl' => 1,
  ),
),false)) {
function content_616b84813e0f00_34614544 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/css/produto.css">
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
    <section class="container">
        <?php 
            Rotas::getPagina();
        ?>
    </section>

</body>
</html><?php }
}
