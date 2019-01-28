<?php
	/* ESTA PAGINA FAZ TODO O CARREGAMENTO DO SITE */

	require './lib/autoload.php';

	$smarty = new Template();
	/* EXECUTANDO FUNCAO getPagina*/
	Rotas::getPagina();


	/* EXIBINDO PAGINA SEMPRE FICARA POR ULTIMO*/
	$smarty->display('index.tpl');



