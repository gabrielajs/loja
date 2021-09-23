<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-10-12 22:17:41
         compiled from "view\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7868607915ee2693f601040-93854559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ead0ed6ac307dd4a68d41059be40f716abb4389' => 
    array (
      0 => 'view\\home.tpl',
      1 => 1602533839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7868607915ee2693f601040-93854559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5ee2693f66e3e8_23511832',
  'variables' => 
  array (
    'PRO' => 0,
    'k' => 0,
    'P' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2693f66e3e8_23511832')) {function content_5ee2693f66e3e8_23511832($_smarty_tpl) {?><section>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['P']->key;
?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class=<?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?>"active" <?php }?>></li>
            <?php } ?>
        </ol>
        <div class="carousel-inner">
            <?php  $_smarty_tpl->tpl_vars['P'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['P']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['P']->key => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['P']->key;
?>
                <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['k']->value==1) {?>active<?php }?>">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img_g'];?>
" class="d-block w-100" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['P']->value['p_descricao'];?>
</p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container p-md-4">
        <h5>Produtos</h5>
        <div class="row">
            <div class="card m-4" style="width: 18rem;">
                <img src="../media/images/bone.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Boné Oakley Tincan Carbon</h5>
                    <h5>R$199,99</h5>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <img src="../media/images/bone.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Boné Oakley Tincan Carbon</h5>
                    <h5>R$199,99</h5>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <img src="../media/images/bone.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Boné Oakley Tincan Carbon</h5>
                    <h5>R$199,99</h5>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <img src="../media/images/bone.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Boné Oakley Tincan Carbon</h5>
                    <h5>R$199,99</h5>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <img src="../media/images/bone.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Boné Oakley Tincan Carbon</h5>
                    <h5>R$199,99</h5>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <img src="../media/images/bone.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Boné Oakley Tincan Carbon</h5>
                    <h5>R$199,99</h5>
                </div>
            </div>
        </div>
    </div>
</section><?php }} ?>
