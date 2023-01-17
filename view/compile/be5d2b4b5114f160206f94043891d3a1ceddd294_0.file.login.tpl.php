<?php
/* Smarty version 3.1.39, created on 2023-01-17 02:55:14
  from 'C:\xampp\htdocs\loja_design\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63c60002aae852_87627466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be5d2b4b5114f160206f94043891d3a1ceddd294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\login.tpl',
      1 => 1639615078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente-logado.tpl' => 1,
  ),
),false)) {
function content_63c60002aae852_87627466 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:cliente-logado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php } else { ?>
<div>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 margin-auto">
        <form role="form" name="login" method="post" action="">
            <fieldset>
                <h2 class="text-center">Já sou cliente</h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg"
                        placeholder="Digite seu e-mail">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" id="senha" class="form-control input-lg"
                        placeholder="Digite sua senha">
                </div>
                <span class="button-checkbox">
                    <a href="#" class="btn btn-link pull-right">Esqueci senha</a>
                </span>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['CLIENTE']->value;?>
" class="btn btn-lg btn-primary btn-block">Criar Conta</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php }
}
}
