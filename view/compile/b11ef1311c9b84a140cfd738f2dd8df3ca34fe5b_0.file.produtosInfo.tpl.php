<?php
/* Smarty version 3.1.33, created on 2019-02-23 03:57:06
  from 'C:\wamp64\www\loja\view\produtosInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c70c4920b0e43_97210999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11ef1311c9b84a140cfd738f2dd8df3ca34fe5b' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\produtosInfo.tpl',
      1 => 1550893814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c70c4920b0e43_97210999 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROD']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
	<h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h3>
	<hr>

	<div class="">
	    <div class="">
	        <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img_g'];?>
" alt="" > 
	    </div>
	    <div class="thumbnail"> 
	    	<img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/imagens/logo-pagseguro.png" alt="">
	  		<hr>
	        <div class="">
	           <h3 class="text-center preco">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['p_valor'];?>
</h3>     
	        </div>
	        <div class="">
	            <form name="carrinho" method="post" action="">
	                <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
">
	                <input type="hidden" name="acao" value="add">
	            	<button  class="btn btn-success btn-lg">Comprar</button>
	            </form>  
	        </div>
	    </div>
	</div>
	<div>
        <h4 class="text-center">Mais imagens</h4>
        <ul style="list-style: none">           
            <li class="">
              	<img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img_p'];?>
" alt="" class="thumbnail">
            </li>
        </ul>
    </div>
    <div>
        <h4 class="text-center">Descrição do produto</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['P']->value['p_descricao'];?>
</p>
    </div>  
        <br>
        <br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
