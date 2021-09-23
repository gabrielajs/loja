<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-06-23 04:29:40
         compiled from "view\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3098344465ef1602907ca62-99512988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc573d970db515c690f66fd2d32d8b2619dac88' => 
    array (
      0 => 'view\\header.tpl',
      1 => 1592879373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3098344465ef1602907ca62-99512988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5ef160290906b0_70292826',
  'variables' => 
  array (
    'facebook' => 0,
    'INICIO' => 0,
    'CATEGORIA' => 0,
    'C' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef160290906b0_70292826')) {function content_5ef160290906b0_70292826($_smarty_tpl) {?><div class="bg-dark">
    <div class="container">
        <div class="row p-3">
            <div class="col-sm">
                <ul>
                    <?php if ($_smarty_tpl->tpl_vars['facebook']->value>10) {?>
                        <li>
                            <a href="#" title="facebook" class="text-light">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                    <?php }?>

                    <li>
                        <a href="#" title="twitter" class="text-light">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="instagram" class="text-light">
                            <i class="fab fa-instagram"></i>
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
