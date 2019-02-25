<?php 
Class Produtos extends Conexao{
	function __construct(){
		parent::__construct();
	}

	/*BUSCANDO PRODUTOS POR CATEGORIA*/
	function getProdutosCatId($id){
		$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON c.cat_id = p.categoria_id AND cat_id = :id";
		//$query .= "AND prod_id = :id"; 
		$params = array(':id'=>(int)$id);
		$this->executeSQL($query, $params);
		$this->getLista();
	}

	/*BUSCANDO PRODUTOS POR ID*/
	function getProdutosId($id){
		$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.categoria_id = c.cat_id AND prod_id = :id";
		//$query .= "AND prod_id = :id"; 
		$params = array(':id'=>(int)$id);
		$this->executeSQL($query, $params);
		$this->getLista();
	}

	/*BUSCANDO PRODUTOS QUE DE UMA CATEGORIA ESPECIFICA*/
	function getProdutos(){
		$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.categoria_id = c.cat_id";
		/*$query .= "ORDER BY prod_id DESC";*/ 
		$this->executeSQL($query);
		$this->getLista();
	}

	/*VERIFICANDO DADOS*/
	private function getLista(){
		$i = 1;
		while($lista = $this->listarDados()):
			$this->itens[$i] = array(
				'p_id'=> $lista['prod_id'],
				'p_nome'=> $lista['prod_nome'],
				'p_descricao'=> $lista['prod_descricao'],
				'p_peso'=> $lista['prod_peso'],
				'p_altura'=> $lista['prod_altura'],
				'p_valor'=> Sistema::MoedaBR($lista['prod_valor']),
				'p_comprimento'=> $lista['prod_comprimento'],
				'p_img'=> Rotas::imageLink($lista['prod_img'],180,180),
				'p_img_g'=> Rotas::imageLink($lista['prod_img'],300,300),
				'p_img_p'=> Rotas::imageLink($lista['prod_img'],70,70),
				'p_slug'=> $lista['prod_slug'],
				'p_estoque'=> $lista['prod_estoque'],
				'p_modelo'=> $lista['prod_modelo'],
				'p_referencia'=> $lista['prod_referencia'],
				'p_fabricante'=> $lista['prod_fabricante'],
				'p_ativo'=> $lista['prod_ativo'],
				'p_frete_gratis'=> $lista['prod_frete_gratis'],
				'cate_id'=> $lista['categoria_id']
			);
		  $i++;
		endwhile;
	}
}
?>