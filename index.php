<?php
/** Arquivo principal, todos os arquivos irão passar por aqui */

require './lib/autoload.php';

if(!isset($_SESSION)):
    session_start();
endif;

$smarty = new Template();
$menu = new Menu();
$configuracoes = new Configuracoes();
$produto = new Produto();

$produto->bannerProdutos(); //sql que busca produto exibido no banner
$menu->getMenu(); //sql que busca todos os menus
$configuracoes->getConfiguracao(); //sql que busca configuracoes

$smarty->assign('PRO', $produto->getItens()); //retorna os dados do produto
$smarty->assign('CONF', $configuracoes->getItens()); //retorna os dados de configuracoes
$smarty->assign('MENU', $menu->getItens()); //retorna os dados do menu
$smarty->assign('VIEW', Rotas::getView()); //pasta view do projeto
$smarty->assign('NOME_SITE', Rotas::getNomeSite()); //nome do site informado na classe Config
$smarty->assign('HOME', Rotas::getSiteHome()); //home do site informado na classe Config
$smarty->assign('INFO_P', Rotas::pageProdutoInfo()); //ao clicar mostra detalhes do produtos
$smarty->assign('LOGIN', Rotas::pageLogin()); //pagina de login
$smarty->assign('SAIR', Rotas::pageLogout()); 

if(Login::logado()):
    $smarty->assign('NOME', $_SESSION['CLI']['c_nome']);
endif;

$smarty->display('index.tpl'); //esta chamando o arquivo index.tpl da pasta view