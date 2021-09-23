<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-10-23 02:10:10
         compiled from "view\cabecalho-site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19654361045f921f626cf915-43221414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8696572ec85dedc19b6c2752d57c71307c30e0e4' => 
    array (
      0 => 'view\\cabecalho-site.tpl',
      1 => 1602374114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19654361045f921f626cf915-43221414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONF' => 0,
    'HOME' => 0,
    'C' => 0,
    'MENU' => 0,
    'M' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5f921f62717947_80389561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f921f62717947_80389561')) {function content_5f921f62717947_80389561($_smarty_tpl) {?><div class="espacamento">
    <div class="container">
        <div class="f-left">
            <?php  $_smarty_tpl->tpl_vars['C'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['C']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CONF']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['C']->key => $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['C']->value['c_logo'];?>
" alt="logo" id="img-logo"></a>
            <?php } ?>
        </div>

        <div id="busca" class="inline-block">
            <form id="form-busca">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pesquisa..." aria-label="Pesquisa..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </form>
        </div>

        <div id="icones" class="f-right inline-block">
            <div class="entrar-cadastrar inline-block">
                <span class="texto">Bem vindo</span><br>
                <a href="" class="texto">Entre ou Cadastre</a>
            </div>
            <div id="carrinho" class="f-right ">
                <a href=""><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="header-menu">
    <div class="container">
        <nav id="menu">
            <ul class="form-inline">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Início</a></li>
                <?php  $_smarty_tpl->tpl_vars['M'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['M']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MENU']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['M']->key => $_smarty_tpl->tpl_vars['M']->value) {
$_smarty_tpl->tpl_vars['M']->_loop = true;
?>
                    <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['M']->value['m_nome'];?>
</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div><?php }} ?>
