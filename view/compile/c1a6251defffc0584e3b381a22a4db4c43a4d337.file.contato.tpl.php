<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-11-17 01:45:18
         compiled from "view\contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19687336455fab34f12d4448-86560235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a6251defffc0584e3b381a22a4db4c43a4d337' => 
    array (
      0 => 'view\\contato.tpl',
      1 => 1605471911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19687336455fab34f12d4448-86560235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5fab34f131bf56_46001904',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab34f131bf56_46001904')) {function content_5fab34f131bf56_46001904($_smarty_tpl) {?><h2 class="text-center">Fale Conosco</h2>
<br>
<form class="container" method="get" action="envio">
    <div class="form-group">
        <label for="nome">Nome completo<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="nome" id="nome" >
        <span class="msg"></span>
    </div>
    <div class="form-group">
        <label for="email">E-mail<span class="text-danger">*</span></label>
        <input type="email" class="form-control" name="email" id="email">
        <span class="msg"></span>
    </div>
    <div class="form-group">
        <label for="tipo">Tipo<span class="text-danger">*</span></label>
        <select class="form-control" id="tipo" name="tipo">
            <option value="sugestao">Sugestão</option>
            <option value="reclamacao">Reclamação</option>
            <option value="elogio">Elogio</option>
            <option value="duvida">Dúvida</option>
        </select>
        <span class="msg"></span>
    </div>
    <div class="form-group">
        <label for="texto">Digite seu texto<span class="text-danger">*</span></label>
        <textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
        <span class="msg"></span>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php }} ?>
