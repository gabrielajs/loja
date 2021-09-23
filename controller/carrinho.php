<?php
if ($_SESSION['PRO']) :
    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->getCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->total()));
    $smarty->assign('COMPRAR', Rotas::pageCarrinhoAlterar());
    $smarty->assign('PEDIDO', Rotas::pageConfirmarPedido());    
else:
    echo '<div class="alert alert-secondary" role="alert">Carrinho vazio !</div>';
endif;

$smarty->display('carrinho.tpl'); //esta chamando o arquivo carrinho.tpl da pasta view