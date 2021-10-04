<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-09-28 02:58:25
         compiled from "view\confirmarPedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179587346460a5bc5621a5f9-86001672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e30244bd71b288d5d07c99bd53199ce2c3778dec' => 
    array (
      0 => 'view\\confirmarPedido.tpl',
      1 => 1632790699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179587346460a5bc5621a5f9-86001672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_60a5bc56237220_72829717',
  'variables' => 
  array (
    'LOGADO' => 0,
    'NEGADO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60a5bc56237220_72829717')) {function content_60a5bc56237220_72829717($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['LOGADO']->value) {?>
<h1>CONFIRMAR PEDIDO</h1>

<?php } else { ?>

    <?php echo $_smarty_tpl->tpl_vars['NEGADO']->value;?>


<?php }?><?php }} ?>
