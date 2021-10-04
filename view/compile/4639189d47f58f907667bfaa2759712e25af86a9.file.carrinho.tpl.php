<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-09-28 02:27:28
         compiled from "view\carrinho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17060621925f84c4775c45c8-05276075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4639189d47f58f907667bfaa2759712e25af86a9' => 
    array (
      0 => 'view\\carrinho.tpl',
      1 => 1632788840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17060621925f84c4775c45c8-05276075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5f84c4775c5817_05354822',
  'variables' => 
  array (
    'PRO' => 0,
    'P' => 0,
    'COMPRAR' => 0,
    'TOTAL' => 0,
    'PEDIDO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f84c4775c5817_05354822')) {function content_5f84c4775c5817_05354822($_smarty_tpl) {?><div class="container">
    <div>
        <a href="#" class="link-primary">continuar comprando</a>
    </div>
    <br>
    <div class="row">
        <div class="col-8">
            <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
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
            <?php } ?>
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
</div><?php }} ?>
