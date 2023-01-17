<?php
$produto = new Produto();
$smarty = new Template();
$imagem = new Imagens();
$correio = new Correio();
$carrinho = new Carrinho();

$produto->getProdutosId(Rotas::$page[1]);
$imagem->getImagem(Rotas::$page[1]);

$smarty->assign('PRO', $produto->getItens());
$smarty->assign('IMG', $imagem->getItens());
$smarty->assign('COMPRAR', Rotas::pageCarrinhoAlterar());

if(isset($_POST['cep'])):
    $cep = $_POST['cep'];
endif;

/*$ID = Rotas::$page[1];
foreach ($produto->getItens() as $pro) {
	$_SESSION['PRO'][$ID]['id'] = $pro['p_id'];
	$_SESSION['PRO'][$ID]['nome'] = $pro['p_nome'];
    $_SESSION['PRO'][$ID]['valor'] = $pro['p_valor_us'];
    $_SESSION['PRO'][$ID]['peso'] = $pro['p_peso'];
    $_SESSION['PRO'][$ID]['img'] = $pro['p_img'];
    $_SESSION['PRO'][$ID]['qtd'] = 1;
    $_SESSION['PRO'][$ID]['altura'] = $pro['p_altura'];
    $_SESSION['PRO'][$ID]['largura'] = $pro['p_largura'];
    $_SESSION['PRO'][$ID]['comprimento'] = $pro['p_comprimento'];
    $_SESSION['PRO'][$ID]['frete'] = $pro['p_frete'];
    $_SESSION['PRO'][$ID]['link'] = 'sssslink';
    $ID++;
}

var_dump($produto->getItens());*/

$smarty->display('produtoInfo.tpl'); //esta chamando o arquivo produto.tpl da pasta view