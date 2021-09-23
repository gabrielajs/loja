<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-10-18 05:00:23
         compiled from "view\pagina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9896012795f8bafc7011f11-80490382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2267bf7fbed463abb2125d384fcc6201791aeefb' => 
    array (
      0 => 'view\\pagina.tpl',
      1 => 1602905354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9896012795f8bafc7011f11-80490382',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5f8bafc70189a4_80612866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8bafc70189a4_80612866')) {function content_5f8bafc70189a4_80612866($_smarty_tpl) {?><section class="container">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        Rotas::getPagina();
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</section><?php }} ?>
