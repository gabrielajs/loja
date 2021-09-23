<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-06-11 19:35:19
         compiled from "view\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21115437325edc0f2a4b43d7-82554326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f09622a34f54135014079685e4a297483c179e' => 
    array (
      0 => 'view\\menu.tpl',
      1 => 1591896778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21115437325edc0f2a4b43d7-82554326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5edc0f2a4cb2e1_26019582',
  'variables' => 
  array (
    'INICIO' => 0,
    'CATEGORIA' => 0,
    'C' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edc0f2a4cb2e1_26019582')) {function content_5edc0f2a4cb2e1_26019582($_smarty_tpl) {?><div class="bg-dark">
    <div class="container">
        <div class="row p-3">
            <div class="col-sm">
                <ul>
                    <li>
                        <a href="#" title="facebook" class="text-light">
                            <i class="fab fa-facebook-square fa"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="twitter" class="text-light">
                            <i class="fab fa-twitter-square fa"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="instagram" class="text-light">
                            <i class="fab fa-instagram fa"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="pesquisar" aria-label="pesquisar" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-sm">
                
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link uppercase" href="<?php echo $_smarty_tpl->tpl_vars['INICIO']->value;?>
">Inicio</a>
                    </li>

                    <?php  $_smarty_tpl->tpl_vars['C'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['C']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CATEGORIA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['C']->key => $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->_loop = true;
?>
                        <li class="nav-item">
                            <a class="nav-link uppercase" href="<?php echo $_smarty_tpl->tpl_vars['C']->value['c_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['c_nome'];?>
</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</div><?php }} ?>
