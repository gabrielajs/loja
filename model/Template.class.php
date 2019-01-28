<?php 
	Class Template extends Smarty{
		/*CONSTRUTOR DA CLASSE*/
		function __construct(){
			parent:: __construct();

			/* BUSCANDO TEMPLATE DENTRO DO DIRETORIO*/
			$this->setTemplateDir('view/');
			/* TODO VEZ QUE CHAMAR O ARQUIVO COLOCAR 
			   DENTRO DA PASTA COMPILE*/
			$this->setCompileDir('view/compile/');
			/* GUARDA INFORMAÇÕES NO CACHE*/
			$this->setCacheDir('view/cache/');
		}
	}	
?>