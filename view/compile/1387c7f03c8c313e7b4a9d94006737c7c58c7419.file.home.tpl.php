<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-09-23 21:46:54
         compiled from "view\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13368644275f962c8d2877e2-57350671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1387c7f03c8c313e7b4a9d94006737c7c58c7419' => 
    array (
      0 => 'view\\home.tpl',
      1 => 1632426391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13368644275f962c8d2877e2-57350671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5f962c8d2a8461_67454506',
  'variables' => 
  array (
    'NOME_SITE' => 0,
    'VIEW' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f962c8d2a8461_67454506')) {function content_5f962c8d2a8461_67454506($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
/tema/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <?php echo $_smarty_tpl->getSubTemplate ("cabecalho-site.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </header>
    <section class="container">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            Rotas::getPagina();
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </section>

</body>
</html><?php }} ?>
