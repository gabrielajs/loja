<?php
if ($_SESSION['PRO']) :
    $smarty = new Template();
    $carrinho = new Carrinho();
    $pedido = new Pedido();

    $smarty->assign('PRO', $carrinho->getCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->total()));
    $smarty->assign('COMPRAR', Rotas::pageCarrinhoAlterar());
    $smarty->assign('PEDIDO', Rotas::pageConfirmarPedido());  
    
    $cliente = 1;
    $sessao = $_SESSION['pedido'];
    $cod = '123456';

    /* DEPOIS QUE O PEDIDO FOR SALVO A SESSÃO DO CARRINHO SERÁ LIMPA*/
    if($pedido->pedidoSalvar($cliente, $sessao, $cod)):
       $pedido->limparSessao(); 
    endif;
else:
    echo '<div class="alert alert-secondary" role="alert">Carrinho vazio !</div>';
endif;

$smarty->display('carrinho.tpl'); //esta chamando o arquivo carrinho.tpl da pasta view