<?php
	Class Rotas{
		public static $page;

		/* VERIFICADO URL */
		static function getPagina(){

			if (isset($_GET['page'])) {
				/* VARIAVEL PAGINA RECEBE O PARAMENTRO DA URL*/
				$pagina = $_GET['page'];

				/* UTILIZANDO EXPLODE PARA SEPARAR COM /*/
				self::$page = explode('/', $pagina);

				/* VARIAVEL PAGINA RECEBE O QUE FOI DIGITADO NA URL*/
				$pagina = 'controller/' . $_GET['page'] . '.php';

				/* CASO ARQUIVO EXISTE A PAGINA SERA EXIBIDA*/
				if(file_exists($pagina)){
					include $pagina;
				}
			} else{
				include 'erro.php';
			}
		}

	}
?>