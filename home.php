<?php

require './lib/autoload.php';

if(!isset($_SESSION)):
    session_start();
endif;

$smarty = new Template();
$menu = new Menu();
$configuracoes = new Configuracoes();
$login = new Login();

$configuracoes->getConfiguracao(); //sql que busca configuracoes
$menu->getMenu(); //sql que busca todos os menus

$smarty->assign('VIEW', Rotas::getView()); //pasta view do projeto
$smarty->assign('CONF', $configuracoes->getItens()); //retorna os dados de configuracoes
$smarty->assign('MENU', $menu->getItens()); //retorna os dados do menu
$smarty->assign('VIEW', Rotas::getView()); //pasta view do projeto
$smarty->assign('NOME_SITE', Rotas::getNomeSite()); //nome do site informado na classe Config
$smarty->assign('HOME', Rotas::getSiteHome()); //home do site informado na classe Config
$smarty->assign('LOGIN', Rotas::pageLogin()); //pagina de login
$smarty->assign('LOGADO', Login::logado()); //cliente logado
$smarty->assign('SAIR', Rotas::pageLogout()); 

if(Login::logado()):
    $smarty->assign('NOME', $_SESSION['CLI']['c_nome']);
endif;

$smarty->display('home.tpl');