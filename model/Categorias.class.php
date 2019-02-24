<?php 
Class Categorias extends Conexao{

	private $cat_id, $cat_nome, $cat_slug;

	function __construct(){
		parent::__construct();
	}

	/*BUSCANDO NO BANCO DE DADOS
	  TODAS AS CATEGORIAS*/
	function getCategorias(){
		$query = "SELECT * FROM {$this->prefix}categorias ORDER BY cat_nome ASC";
		$this->executeSQL($query);
		$this->getLista();
	}

	/*LISTA DE CATEGORIAS*/
	private function getLista(){
		$i=1;
		while($lista = $this->listarDados()):
			$this->itens[$i] = array(
				'c_id' => $lista['cat_id'],
				'c_nome' => $lista['cat_nome'],
				'c_slug' => $lista['cat_slug'],
				'c_link' => Rotas::pageProdutos().'/'.$lista['cat_id'].'/'.$lista['cat_slug']
			);
		  $i++;
		endwhile;
	}
}
?>