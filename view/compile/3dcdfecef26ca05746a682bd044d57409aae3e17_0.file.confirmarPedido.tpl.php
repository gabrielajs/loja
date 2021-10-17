<?php
/* Smarty version 3.1.39, created on 2021-10-17 04:19:18
  from 'C:\xampp\htdocs\loja_design\view\confirmarPedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b88263c6305_88642883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dcdfecef26ca05746a682bd044d57409aae3e17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\confirmarPedido.tpl',
      1 => 1634436966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616b88263c6305_88642883 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
    <h1>CONFIRMAR PEDIDO</h1>

<?php } else { ?>

    <?php echo $_smarty_tpl->tpl_vars['NEGADO']->value;?>


<?php }
}
}
