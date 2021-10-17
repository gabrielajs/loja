<?php
/* Smarty version 3.1.39, created on 2021-10-17 05:01:43
  from 'C:\xampp\htdocs\loja_design\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b92172ea1d0_58083192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be5d2b4b5114f160206f94043891d3a1ceddd294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_design\\view\\login.tpl',
      1 => 1634439456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616b92172ea1d0_58083192 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
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
