<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-05-14 03:22:01
         compiled from "view\produtoInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4320644935fb5d2a2af4959-86753901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c18ec8d65af8a3fd83e130ad2ff15fc1a20e814' => 
    array (
      0 => 'view\\produtoInfo.tpl',
      1 => 1620955165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4320644935fb5d2a2af4959-86753901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5fb5d2a2af5413_17694122',
  'variables' => 
  array (
    'PRO' => 0,
    'IMG' => 0,
    'I' => 0,
    'P' => 0,
    'COMPRAR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb5d2a2af5413_17694122')) {function content_5fb5d2a2af5413_17694122($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
?>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-3">
                    <ul class="nav nav-tabs tabs-left">
                        <?php  $_smarty_tpl->tpl_vars['I'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['I']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IMG']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['I']->key => $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->_loop = true;
?>
                            <li>
                                <a href="#" data-toggle="tab">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['i_nome'];?>
" class="img-fluid">
                                </a>
                            </li>
                        <?php } ?>
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
</b></p>
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
                
                <form class="form-inline frete">
                    <div class="form-group mb-2">
                        <input type="text" id="cep" class="form-control" placeholder="Calcular CEP">
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
<?php } ?><?php }} ?>
