<?php
	/* ESTA PAGINA FAZ TODO O CARREGAMENTO DO SITE */

	require './lib/autoload.php';

	$smarty = new Template();
	$categoria = new Categorias();
	$categoria->getCategorias();

	/*CATEGORIAS*/
	$smarty->assign('CATEGORIA', $categoria->getItens());

	

	/*BUSCAR PASTA TEMA */
	$smarty->assign('TEMA', Rotas::getSiteTema());
	/*PAGINA HOME DO SITE*/
	$smarty->assign('HOME', Rotas::getSiteHome());
	/*PAGINA CARRINHO*/
	$smarty->assign('CARRINHO', Rotas::pageCarrinho());
	/*PAGINA CONTATO*/
	$smarty->assign('CONTATO', Rotas::pageContato());
	/*PAGINA PRODUTO*/
	$smarty->assign('PRODUTO', Rotas::pageProdutos());
	/*TITULO DO SITE*/
	$smarty->assign('TITULO', Config::SITE_NOME);


	/* EXIBINDO PAGINA SEMPRE FICARA POR ULTIMO*/
	$smarty->display('index.tpl');
?>