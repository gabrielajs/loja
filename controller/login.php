<?php

$smarty = new Template();
$login = new Login();


if(isset($_POST['email']) && isset($_POST['senha'])):
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $login->getLogin($email, $senha);
endif;

if(Login::logado()):
    $smarty->assign('NOME', $_SESSION['CLI']['c_nome']);
endif;

$smarty->assign('CLIENTE', Rotas::pageCliente());
$smarty->assign('LOGADO', Login::logado());

$smarty->display('login.tpl');
