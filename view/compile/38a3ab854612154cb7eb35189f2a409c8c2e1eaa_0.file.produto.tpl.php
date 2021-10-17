<?php
/* Smarty version 3.1.39, created on 2021-10-17 04:04:20
  from 'C:\xampp\htdocs\loja_design\view\produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b84a4cc5dc3_63072143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a3ab854612154cb7eb35189f2a409c8c2e1eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\produto.tpl',
      1 => 1611623867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616b84a4cc5dc3_63072143 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Produtos</h2>

<?php if ($_smarty_tpl->tpl_vars['TOTAL']->value < 1) {?>
    <div class="alert alert-secondary" role="alert">
        Nenhum resultado encontrado.
    </div>
<?php }?>

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
                        <h5 class="card-title text-capitalize"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
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

<div>
    <?php echo $_smarty_tpl->tpl_vars['PAGINACAO']->value;?>

</div><?php }
}
