<?php
    $smarty = new Template();

    $login = new Login();

    if(Login::logado()):
        $smarty->assign('LOGADO', $login::logado());
        $smarty->display('confirmarPedido.tpl');
    else:
        $smarty->assign('NEGADO', $login::acessoNegado());
    endif;