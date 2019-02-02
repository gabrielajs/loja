<?php
/* Smarty version 3.1.33, created on 2019-02-02 00:09:59
  from 'C:\wamp64\www\loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c54dfd7431c24_07787967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df340bbdbc059a6320ce8bffa25a5619d716d6dc' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\index.tpl',
      1 => 1549066196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c54dfd7431c24_07787967 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/css/bootstrap.min.css">
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
<header class="">
  <div class="container pd-site">
    <span class="text-uppercase">Nome do Site</span>
    <form class="form-inline group-header">
    	<div class="">
    		<input type="text" class="form-control" id="inp-search" placeholder="Pesquisar">
    	</div>
    	<button type="button" class="btn btn-outline-success" id="btn-m-left">Pesquisar</button>
    </form>
    <div class="group-header">
    	<a href="#" title="carrinho" id="icon-cart">
			<img src="https://img.icons8.com/material/24/000000/shopping-cart.png">
	    </a>
	    <button type="button" class="btn btn-success" id="btn-m-left">Entrar</button>
    </div>
  </div>
  <!-- INICIO MENU -->
  <nav class="navbar navbar-expand-lg navbar-light color-bg">
    <div class="collapse navbar-collapse container" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-color" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-color" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Camisas
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Femininas</a>
          <a class="dropdown-item" href="#">Masculinas</a>
        </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-color" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vestidos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Curtos</a>
            <a class="dropdown-item" href="#">Longos</a>
            <a class="dropdown-item" href="#">Festas</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- FIM MENU -->
</header>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 bg-light">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#">Camisas</a>
          </li>
          <li class="nav-item">
            <a href="#">Vestidos</a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9">
      <div  arial-label="breadcrumb">
        <ol class="breadcrumb bg-caminho">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Camisas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </div>

      <?php 
		Rotas::getPagina();
      ?>
    </main>
  </div>
</div>
</body>
</html><?php }
}
