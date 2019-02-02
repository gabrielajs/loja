<?php
Class Rotas{
	public static $page;
	private static $pastaController = 'controller';
	private static $pastaView = 'view';

	/* VERIFICADO URL */
	static function getPagina(){
		if (isset($_GET['page'])):
			/* VARIAVEL PAGINA RECEBE O PARAMENTRO DA URL*/
			$pagina = $_GET['page'];
			/* UTILIZANDO EXPLODE PARA SEPARAR COM / */
			self::$page = explode('/', $pagina);
			/* VARIAVEL PAGINA RECEBE O QUE FOI DIGITADO NA URL*/
			$pagina = 'controller/' . $_GET['page'] . '.php';
			/* CASO ARQUIVO EXISTE A PAGINA SERA EXIBIDA*/
			if(file_exists($pagina)):
				include $pagina;
			else:
				include 'erro.php';
			endif;
		endif;
	}
	/* FIM VERIFICANDO URL*/

	/* CAPTURARANDO A PASTA HOME */
	static function getSiteHome(){
		return Config::SITE_URL . '/' . Config::SITE_PASTA;
	}

	/* RAIZ DO SITE*/
	static function getSiteRaiz(){
		return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
	}

	/* CAMINHO DO TEMA FICA DENTRO DA PASTA VIEW*/
	static function getSiteTema(){
		return self::getSiteHome() . '/' . self::$pastaView;
	}

	/* PAGINA DE CARRINHO */
	static function pageCarrinho(){
		return self::getSiteHome() . '/carrinho';
	}

	/* PAGINA CONTATO*/
	static function pageContato(){
		return self::getSiteHome() . '/contato';
	}
}
?>
