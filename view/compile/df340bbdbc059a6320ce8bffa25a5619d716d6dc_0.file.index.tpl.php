<?php
/* Smarty version 3.1.33, created on 2019-02-23 04:13:33
  from 'C:\wamp64\www\loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c70c86d16adb1_15784754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df340bbdbc059a6320ce8bffa25a5619d716d6dc' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\index.tpl',
      1 => 1550895209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c70c86d16adb1_15784754 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/css/estilo.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <title>Index</title>
</head>
<body>
<div class="container-fluid">
  <!-- TOPO -->
  <div class="" id="header">
    <div class="container pd-site">
      <span class="text-uppercase">Nome do Site</span>
      <form class="form-inline group-header">
        <div class="">
          <input type="text" class="form-control" id="inp-search" placeholder="Pesquisar">
        </div>
        <button type="button" class="btn btn-outline-success" id="btn-m-left">Pesquisar</button>
      </form>
      <div class="group-header">
        <a href="<?php echo $_smarty_tpl->tpl_vars['CARRINHO']->value;?>
" title="carrinho" id="icon-cart">
        <img src="https://img.icons8.com/material/24/000000/shopping-cart.png">
        </a>
        <button type="button" class="btn btn-success" id="btn-m-left">Entrar ou Cadastrar</button>
      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light color-bg">
      <div class="collapse navbar-collapse container" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-color" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-color" href="<?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value;?>
">Todos Produtos</a>
          </li>
        </ul>
      </div>
    </nav> 
  </div>



  <!-- CONTEUDO -->
  <div class="row" id="conteudo">
    <div class="col-sm-2">
      <div class="list-group">
        <a class="list-group-item">Categorias</a>
        <a class="list-group-item" href="<?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value;?>
">Todos</a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIA']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
          <a class="list-group-item" href="<?php echo $_smarty_tpl->tpl_vars['C']->value['c_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['c_nome'];?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>






    <div class="col-sm">
      <?php 
        Rotas::getPagina();
      ?>
    </div>
  </div>


  <!-- RODAPE 
  <div class="row" id="footer">
    <div class="col-sm-1">
      <p>redes sociais</p>
    </div>

    <div class="col-sm-1">
      <p>info site</p>
    </div>

    <div class="col-sm-1">
      <p>pagamentos</p>
    </div>

    <div class="col-sm-1">
      <a href="<?php echo $_smarty_tpl->tpl_vars['CONTATO']->value;?>
">Fale Conosco</a>
    </div>
  </div>-->
</div>
</body>
</html><?php }
}
