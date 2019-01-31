<?php
	/* ESTA PAGINA FAZ TODO O CARREGAMENTO DO SITE */

	require './lib/autoload.php';

	$smarty = new Template();
	/* EXECUTANDO FUNCAO getPagina*/
	Rotas::getPagina();

	/*BUSCAR PASTA TEMA */
	$smarty->assign('TEMA', Rotas::getSiteTema());


	/* EXIBINDO PAGINA SEMPRE FICARA POR ULTIMO*/
	$smarty->display('index.tpl');



