<?php

/** Classe para tratar rotas do projeto */

class Rotas
{
    public static $page;
    private static $pastaView = 'view';

    //verifica a url
    static function getPage()
    {
        if (isset($_GET['page'])) :
            $pagina = $_GET['page'];

            self::$page = explode('/', $pagina);

            $pagina = 'controller/' . self::$page[0] . '.php';

            if (file_exists($pagina)) {
                include $pagina;
            }
        endif;

        /* if (isset($_GET['page'])) :
            $pagina = $_GET['page'];

            self::$page = explode('/', $pagina);

            $pagina = 'controller/' . self::$page[0] . '.php';

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        else :
            include 'home.php';
        endif; */
    }

    //verifica a url
    static function getPagina()
    {
        if (isset($_GET['page'])) :
            $pagina = $_GET['page'];

            self::$page = explode('/', $pagina);

            $pagina = 'controller/' . self::$page[0] . '.php';

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        endif;

        /* if (isset($_GET['page'])) :
            $pagina = $_GET['page'];

            self::$page = explode('/', $pagina);

            $pagina = 'controller/' . self::$page[0] . '.php';

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        else :
            include 'home.php';
        endif; */
    }

    //captura a pasta home do projeto
    static function getSiteHome()
    {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    //captura o nome do site
    static function getNomeSite()
    {
        return Config::SITE_NOME;
    }

    //captura pasta view
    static function getView()
    {
        return self::getSiteHome() . '/' . self::$pastaView;
    }

    //pasta das imagens de produtos
    static function imgProdutos()
    {
        return self::getSiteHome() . '/' . 'media/images';
    }

    //pasta imagens utilizada na configurações do site
    static function imgConf($img)
    {
        $imagem = self::getView() . '/' . "tema/img/{$img}";
        return $imagem;
    }

    //img thumb
    static function imgLink($img, $largura, $altura)
    {
        $imagem = self::imgProdutos() . '/' . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }

    //pagina produto
    static function pageProduto()
    {
        return self::getSiteHome() . '/produto';
    }

    //pagina de informações de produtos
    static function pageProdutoInfo()
    {
        return self::getSiteHome() . '/produtoInfo';
    }

    //pagina carrinho Alterar ao clicar botão comprar
    static function pageCarrinhoAlterar()
    {
        return self::getSiteHome() . '/carrinhoAlterar';
    }

    //pagina carrinho
    static function pageCarrinho()
    {
        return self::getSiteHome() . '/carrinho';
    }

    //pagina de login
    static function pageLogin()
    {
        return self::getSiteHome() . '/login';
    }

    //pagina de cliente
    static function pageCliente()
    {
        return self::getSiteHome() . '/cliente';
    }

    //redirecionamento
    static function redirecionar($tempo, $redirecionar)
    {
        $url = '<meta http-equiv="refresh" content="' . $tempo . ' url=' . $redirecionar . '">';
        echo $url;
    }

    //pagina confirmar pedido
    static function pageConfirmarPedido()
    {
        return self::getSiteHome() . '/confirmarPedido';
    }

    //pagina sair
    static function pageLogout()
    {
        return self::getSiteHome() . '/sair';
    }
}
