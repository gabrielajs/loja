<?php /* Smarty version Smarty-3.1.19-dev, created on 2021-09-23 02:12:59
         compiled from "view\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1639919660613d5774865689-37689030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e07a82cf608f375daf2c158e867a83dc846eb7' => 
    array (
      0 => 'view\\login.tpl',
      1 => 1632355949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1639919660613d5774865689-37689030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_613d577487f819_45818934',
  'variables' => 
  array (
    'LOGADO' => 0,
    'CLIENTE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_613d577487f819_45818934')) {function content_613d577487f819_45818934($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['LOGADO']->value==true) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("cliente-logado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php }?><?php }} ?>
