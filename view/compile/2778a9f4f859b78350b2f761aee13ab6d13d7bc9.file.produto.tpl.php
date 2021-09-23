<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-01-26 02:18:09
         compiled from "view\produto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3696307485f614a08390866-87216827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2778a9f4f859b78350b2f761aee13ab6d13d7bc9' => 
    array (
      0 => 'view\\produto.tpl',
      1 => 1611623867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3696307485f614a08390866-87216827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5f614a083920f1_40073840',
  'variables' => 
  array (
    'TOTAL' => 0,
    'PRO' => 0,
    'INFO_P' => 0,
    'P' => 0,
    'PAGINACAO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f614a083920f1_40073840')) {function content_5f614a083920f1_40073840($_smarty_tpl) {?><h2>Produtos</h2>

<?php if ($_smarty_tpl->tpl_vars['TOTAL']->value<1) {?>
    <div class="alert alert-secondary" role="alert">
        Nenhum resultado encontrado.
    </div>
<?php }?>

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
                        <h5 class="card-title text-capitalize"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h5>
                        <p class="card-text">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['p_valor_br'];?>
</p>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>

<div>
    <?php echo $_smarty_tpl->tpl_vars['PAGINACAO']->value;?>

</div><?php }} ?>
