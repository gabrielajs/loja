<?php
$produto = new Produto();
$smarty = new Template();

if (isset(Rotas::$page[1])) :
    $produto->getProdutosCat(Rotas::$page[1]);
else :
    $produto->getProdutos();
endif;

$smarty->assign('PRO', $produto->getItens());
$smarty->assign('INFO_P', Rotas::pageProdutoInfo());
$smarty->assign('TOTAL', $produto->totalDados());
$smarty->assign('PAGINACAO', $produto->exibePaginacao());

$smarty->display('produto.tpl'); //esta chamando o arquivo produto.tpl da pasta view