<?php 
	$smarty = new Template();

	$produtos = new Produtos();
	/*PESQUISANDO ID UTILIZANDO ARRAY NA POSIÇÃO 1
	$produtos->getProdutosId(Rotas::$page[1]);*/
	$produtos->getProdutosId(Rotas::$page[1]);

	$smarty->assign('PROD', $produtos->getItens());
	$smarty->assign('TEMA', Rotas::getSiteTema());

	$smarty->display('produtosInfo.tpl');
?>