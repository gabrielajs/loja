<?php /* Smarty version Smarty-3.1.19-dev, created on 2020-05-27 02:30:57
         compiled from "view\contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13804363225ec70522177686-47908580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5650b61e728f977d241d5b7f653c1c5a318f10f9' => 
    array (
      0 => 'view\\contato.tpl',
      1 => 1590539445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13804363225ec70522177686-47908580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5ec705222cc5d8_15409422',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ec705222cc5d8_15409422')) {function content_5ec705222cc5d8_15409422($_smarty_tpl) {?><form class="container" action="envio" method="get">
    <div class="form-group">
        <label for="nome">Nome completo</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="digite seu nome completo">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="nome@example.com">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <select class="form-control" id="tipo" name="tipo">
            <option value="sugestao">Sugestão</option>
            <option value="reclamacao">Reclamação</option>
            <option value="elogio">Elogio</option>
        </select>
    </div>
    <div class="form-group">
        <label for="texto">Digite seu texto</label>
        <textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php }} ?>
