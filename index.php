<?php
	/* ESTA PAGINA FAZ TODO O CARREGAMENTO DO SITE */

	require './lib/autoload.php';

	$smarty = new Template();
	
	/*BUSCAR PASTA TEMA */
	$smarty->assign('TEMA', Rotas::getSiteTema());
	/*PAGINA HOME DO SITE*/
	$smarty->assign('HOME', Rotas::getSiteHome());
	/*PAGINA CARRINHO*/
	$smarty->assign('CARRINHO', Rotas::pageCarrinho());
	/*PAGINA CONTATO*/
	$smarty->assign('CONTATO', Rotas::pageContato());






	/* EXIBINDO PAGINA SEMPRE FICARA POR ULTIMO*/
	$smarty->display('index.tpl');
?>