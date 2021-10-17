<?php
/* Smarty version 3.1.39, created on 2021-10-17 04:03:41
  from 'C:\xampp\htdocs\loja_design\view\cabecalho-site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b847d5bf743_86271235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfc6c10b7485b258a51c3dd079af1289e8ff2a6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\cabecalho-site.tpl',
      1 => 1632787432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616b847d5bf743_86271235 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="espacamento">
    <div class="container">
        <div class="f-left">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONF']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['C']->value['c_logo'];?>
" alt="logo" id="img-logo"></a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
"><span class="texto">Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
</span></a><br>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SAIR']->value;?>
" class="texto">Sair</a>
                <?php } else { ?>
                    <span class="texto">Bem vindo</span><br>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
" class="texto">Entre ou Cadastre</a>
                <?php }?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU']->value, 'M');
$_smarty_tpl->tpl_vars['M']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['M']->value) {
$_smarty_tpl->tpl_vars['M']->do_else = false;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['M']->value['m_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['M']->value['m_nome'];?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </nav>
    </div>
</div><?php }
}
