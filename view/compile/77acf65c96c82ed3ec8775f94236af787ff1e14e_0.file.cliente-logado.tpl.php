<?php
/* Smarty version 3.1.39, created on 2023-01-17 02:55:14
  from 'C:\xampp\htdocs\loja_design\view\cliente-logado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63c60002aef9c4_63725209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77acf65c96c82ed3ec8775f94236af787ff1e14e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\cliente-logado.tpl',
      1 => 1632448528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c60002aef9c4_63725209 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Pedidos</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Endereços</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Minha Conta</a></li>
        </ul>
        <hr>
        <ul>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['SAIR']->value;?>
">Sair</a></li>
        </ul>
    </div>
</nav><?php }
}
