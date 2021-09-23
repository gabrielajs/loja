<?php

$carrinho = new Carrinho();

if(!isset($_POST['p_id']) or $_POST['p_id'] < 1):
    echo '<div class="alert alert-dark" role="alert">Ocorreu um erro tente novamente!</div>';
endif;

$id = (int)$_POST['p_id'];

try{
    $carrinho->carrinhoADD($id);
} catch(Exception $e){
    echo '<div class="alert alert-dark" role="alert"></div>Erro tente novamente! . $e</div>';
}

Rotas::redirecionar(1, Rotas::pageCarrinho());