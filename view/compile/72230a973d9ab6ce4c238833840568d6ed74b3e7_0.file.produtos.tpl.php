<?php
/* Smarty version 3.1.33, created on 2019-02-23 19:15:09
  from 'C:\wamp64\www\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c719bbd94e095_02184076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72230a973d9ab6ce4c238833840568d6ed74b3e7' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\produtos.tpl',
      1 => 1550896850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c719bbd94e095_02184076 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Lista de produtos</h3>
<hr> 

<!-- VERIFICANDO SE EXISTE PRODUTO -->
<?php if ($_smarty_tpl->tpl_vars['P_TOTAL']->value < 1) {?>
	<div class="alert alert-danger" role="alert"> Produto não encontrado! </div>
<?php }?>
<section id="produtos" class="row">  
	<ul style="list-style: none;padding: 0 5px 5px 0;">    		  
		<div class="row" id="pularliha">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROD']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
		    <li class="">
		        <div >
		            <a href="<?php echo $_smarty_tpl->tpl_vars['INFO_PRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['p_slug'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['p_img_g'];?>
" class="thumbnail"> 
		                <div class="caption">
		                    <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_nome'];?>
</h4> 
		                    <h3 class="text-center text-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['p_valor'];?>
</h3>
		                </div>
		            </a>
		        </div>
		    </li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>   
	</ul>
</section>
      
<section id="pagincao" class="row">
    <center>PAGINAS</center>
</section>

<?php }
}
