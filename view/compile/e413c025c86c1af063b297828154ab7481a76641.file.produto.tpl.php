<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-10-23 02:10:10
         compiled from "view\produto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3246369555f921f62725c15-07387745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e413c025c86c1af063b297828154ab7481a76641' => 
    array (
      0 => 'view\\produto.tpl',
      1 => 1602473030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3246369555f921f62725c15-07387745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRO' => 0,
    'P' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5f921f6276a2f1_13064875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f921f6276a2f1_13064875')) {function content_5f921f6276a2f1_13064875($_smarty_tpl) {?><section class="container">
<h2>Produtos</h2>
<div class="row row-cols-1 row-cols-md-3">
    <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
?>
        <div class="col mb-4">
            <div class="card">
                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img'];?>
" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h5>
                    <p class="card-text">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['p_valor'];?>
</p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</section><?php }} ?>
