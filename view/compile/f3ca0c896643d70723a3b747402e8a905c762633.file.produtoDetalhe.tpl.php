<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-06-23 03:31:45
         compiled from "view\produtoDetalhe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18707885215ed1cf829f06c5-62437117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ca0c896643d70723a3b747402e8a905c762633' => 
    array (
      0 => 'view\\produtoDetalhe.tpl',
      1 => 1592875901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18707885215ed1cf829f06c5-62437117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5ed1cf829f12b1_28619489',
  'variables' => 
  array (
    'PRO' => 0,
    'P' => 0,
    'IMG' => 0,
    'I' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed1cf829f12b1_28619489')) {function content_5ed1cf829f12b1_28619489($_smarty_tpl) {?><div class="container">
    <div class="row">
        <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
?>
            <div class="col-sm">
                <figure class="figure border">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img_g'];?>
" width="400px" class="figure-img img-fluid rounded" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
">
                </figure>
            </div>
            <div class="row row-cols-1">
                <div class="col">
                    <h2><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h2>
                </div>
                <div class="col">
                    <span><?php echo $_smarty_tpl->tpl_vars['P']->value['p_descricao'];?>
</span>
                </div>
                <div class="col">
                    <a href="http://" class="uppercase p-3 mb-2 bg-success text-white text-decoration-none">Adicionar ao carrinho</a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">Calcular Frete</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="row">       
            <ul>
                <?php  $_smarty_tpl->tpl_vars['I'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['I']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IMG']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['I']->key => $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->_loop = true;
?>
                    <li class="col-md-3">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['i_nome_p'];?>
" class="thumbnail">
                    </li>
                <?php } ?>
            </ul>     
    </div>
</div><?php }} ?>
