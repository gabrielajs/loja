<?php
    $smarty = new Template();

    $login = new Login();

    $smarty->assign('NEGADO', $login::acessoNegado());
    $smarty->assign('LOGADO', $login::logado());

    $smarty->display('confirmarPedido.tpl');


    
