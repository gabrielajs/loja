<?php 
	require './lib/autoload.php';

	$smarty = new Template();

	/*PAGINA CONTATO*/
	$smarty->assign('CONTATO', Rotas::pageContato());

	/* EXIBINDO PAGINA SEMPRE FICARA POR ULTIMO*/
	$smarty->display('contato.tpl');
?>