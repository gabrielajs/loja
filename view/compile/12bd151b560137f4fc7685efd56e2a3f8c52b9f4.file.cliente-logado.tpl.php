<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-09-24 03:55:35
         compiled from "view\cliente-logado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1105576026614bc6455eee03-12375053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12bd151b560137f4fc7685efd56e2a3f8c52b9f4' => 
    array (
      0 => 'view\\cliente-logado.tpl',
      1 => 1632448528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1105576026614bc6455eee03-12375053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_614bc6455f5153_40043755',
  'variables' => 
  array (
    'SAIR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614bc6455f5153_40043755')) {function content_614bc6455f5153_40043755($_smarty_tpl) {?><nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
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
</nav><?php }} ?>
