<?php
/* Smarty version 3.1.33, created on 2019-02-03 23:42:40
  from 'C:\wamp64\www\loja\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c577c709ada30_02861146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8738557e679abbc099c5dfc61123f30c92cdd68c' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\contato.tpl',
      1 => 1549237356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c577c709ada30_02861146 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="text-center">Entre em contato</h1>
<form>
	<div class="form-group">
	    <label for="setor">Setor</label>
	    <select class="form-control" id="setor">
	      <option>Reclamação</option>
	      <option>Elogios</option>
	      <option>Financeiro</option>
	    </select>
  	</div>
	<div class="form-group">
	    <label for="nome">Nome</label>
		<input type="text" class="form-control" id="nome" placeholder="Nome">
	</div>
	<div class="row">
	    <div class="col">
	    	<label for="cidade">Cidade</label>
			<input type="text" class="form-control" id="cidade" placeholder="Cidade">
	    </div>
	    <div class="col">
	    	<label for="telefone">Telefone</label>
			<input type="text" class="form-control" id="telefone" placeholder="telefone">
	    </div>
	</div>
	<div class="form-group">
	    <label for="email">E-mail</label>
		<input type="email" class="form-control" id="email" placeholder="email">
	</div>
	<div class="form-group">
    <label for="comentario">Comentario</label>
    <textarea class="form-control" id="comentario" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-primary">Enviar</button>
</form><?php }
}
