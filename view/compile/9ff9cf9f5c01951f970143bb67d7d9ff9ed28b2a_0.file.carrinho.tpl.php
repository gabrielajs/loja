<?php
/* Smarty version 3.1.39, created on 2023-01-16 22:50:12
  from 'C:\xampp\htdocs\loja_design\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63c5fed441bca4_79791306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff9cf9f5c01951f970143bb67d7d9ff9ed28b2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\carrinho.tpl',
      1 => 1632788840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c5fed441bca4_79791306 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div>
        <a href="#" class="link-primary">continuar comprando</a>
    </div>
    <br>
    <div class="row">
        <div class="col-8">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <div class="card mb-3 bg-light " style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
" class="figure-img img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title namep"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h5>
                                <p class="card-text">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['p_valor_br'];?>
</p>
                                <p class="card-text"><small class="text-muted">Quantidade</small><input type=number></p>
                            </div>
                        </div>
                        <form action=<?php echo $_smarty_tpl->tpl_vars['COMPRAR']->value;?>
 method="POST" name="apagarProduto">
                            <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
">
                            <input type="hidden" name="acao" value="apagarPro">

                            <div>
                                <button class="btn-excluir col-md-2 item-center" title="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div class="col-4 bg-light">
            <p class="text-center">Resumo da Compra</p>
            <h5 class="card-title">SubTotal R$<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h5>
            <h5 class="card-title">Frete R$</h5>
            <hr>
            <h5 class="card-title">Valor Total R$</h5>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PEDIDO']->value;?>
" class="btn btn-success">Confirmar Pedido</a>
        </div>
    </div>
</div><?php }
}
