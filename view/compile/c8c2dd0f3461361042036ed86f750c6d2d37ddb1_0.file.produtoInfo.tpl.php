<?php
/* Smarty version 3.1.39, created on 2022-08-17 02:52:55
  from 'C:\xampp\htdocs\loja_design\view\produtoInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fc3be7cd59d1_63053422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8c2dd0f3461361042036ed86f750c6d2d37ddb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\produtoInfo.tpl',
      1 => 1660697571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fc3be7cd59d1_63053422 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-3">
                    <ul class="nav nav-tabs tabs-left">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMG']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                            <li>
                                <a href="#" data-toggle="tab">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['i_nome'];?>
" class="img-fluid">
                                </a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
                <div class="col-9 tab-content">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img'];?>
" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="info">
                <p class="namep"><b><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</b></p>
                <p><?php echo $_smarty_tpl->tpl_vars['P']->value['p_referencia'];?>
</p>
                <p><b class="font-p">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['p_valor_br'];?>
</b>Peso:<?php echo $_smarty_tpl->tpl_vars['p_peso']->value;?>
</p>
            </div>
            <hr />
            <div class="info-en">
                <form action="<?php echo $_smarty_tpl->tpl_vars['COMPRAR']->value;?>
" method="post">
                    <input type="hidden"  name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
">
                    <input type="hidden"  name="acao" value="add">
                    <button type="submit" class="btn btn-lg btn-outline-primary">Comprar</button><br>
                </form>
                
                <form class="form-inline frete" method="post" action="">
                    <div class="form-group mb-2">
                        <input type="text" id="cep" name="cep" class="form-control" placeholder="Calcular CEP">
                    </div>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary mb-2">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col info-en">
            <p><b>Descrição</b></p>
            <p class="firt-l text-justify"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_descricao'];?>
</p>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
