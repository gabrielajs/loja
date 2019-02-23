<?php 
	$smarty = new Template();

	$produtos = new Produtos();

	/* QUANDO FOR CLICADO EM CATEGORIA
	   IRA MOSTRAR TODOS OS PRODUTOS DA
	   CATEGORIA CLICADA CASO CONTRARIO
	   IRA MOSTRAR PRODUTOS*/
	if(isset(Rotas::$page[1])):
		$produtos->getProdutosCatId(Rotas::$page[1]);
	else:
		$produtos->getProdutos();
	endif;

	$smarty->assign('PROD', $produtos->getItens());
	$smarty->assign('INFO_PRO', Rotas::pageProdutosInfo());
	
	$smarty->display('produtos.tpl');
?>