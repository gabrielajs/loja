<?php 
	$smarty = new Template();

	/*IMAGENS*/
	$img = new ProdutosImagens();
	$img->getImagensProId(Rotas::$page[1]);

	$smarty->assign('IMG', $img->getItens());


	/*PRODUTOS*/
	$produtos = new Produtos();
	$produtos->getProdutosId(Rotas::$page[1]);

	$smarty->assign('PROD', $produtos->getItens());
	$smarty->assign('TEMA', Rotas::getSiteTema());

	$smarty->display('produtosInfo.tpl');
?>