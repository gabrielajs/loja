<?php 
	$smarty = new Template();

	$produtos = new Produtos();
	$produtos->getProdutos();

	$smarty->assign('PROD', $produtos->getItens());
	$smarty->assign('INFO_PRO', Rotas::pageProdutosInfo());
	
	$smarty->display('produtos.tpl');
?>