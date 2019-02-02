<?php
	/* ESTA PAGINA FAZ TODO O CARREGAMENTO DO SITE */

	require './lib/autoload.php';

	$smarty = new Template();
	
	/*BUSCAR PASTA TEMA */
	$smarty->assign('TEMA', Rotas::getSiteTema());
	/*HOME DO SITE*/
	$smarty->assign('HOME', Rotas::getSiteHome());

	/* EXIBINDO PAGINA SEMPRE FICARA POR ULTIMO*/
	$smarty->display('index.tpl');



