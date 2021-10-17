<?php

$smarty = new Template();
$cliente = new Clientes();

if(isset($_POST['nome'])):
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNasc = $_POST['dataNasc'];
    $rg        = $_POST['rg'];
    $cpf       = $_POST['cpf'];
    $telCelular = $_POST['telCelular'];
    $endereco  = $_POST['endereco'];
    $numero    = $_POST['numero'];
    $bairro    = $_POST['bairro'];
    $cidade    = $_POST['cidade'];
    $estado       = $_POST['estado'];
    $cep       = $_POST['cep'];
    $email     = $_POST['email'];
    $senha = $_POST['senha'];
    $senha     = Sistema::criptografiaSenha($_POST['senha']);
    $dataCadas  = Sistema::DataAtualUS();
    $horaCadas  = Sistema::HoraAtual();
    
    $cliente->preparar($nome, $sobrenome, $endereco, $numero, $bairro, $estado, $cidade, $cep, $cpf, $rg, $telCelular, $email, $senha, $dataNasc, $dataCadas, $horaCadas);
    
    $cliente->inserir();

    echo '<div class="alert alert-success">Cadastro efetuado com sucesso!</div>';
    Rotas::redirecionar(4, Rotas::getSiteHome());
else:
    $smarty->display('cliente.tpl');
endif;




