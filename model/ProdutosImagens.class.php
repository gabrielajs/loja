<?php 

Class ProdutosImagens extends Conexao{

	/*PESQUISANDO IMAGEM POR ID DO PRODUTO*/
	function getImagensProId($proId){
		$query = "SELECT * FROM {$this->prefix}imagens WHERE produto_id = :proId";
		$params = array(':proId'=>(int)$proId);
		$this->executeSQL($query, $params);
		$this->getLista();

	}

	/*LISTA DE IMAGENS*/
	private function getLista(){
		$i=1;
		while($lista = $this->listarDados()):
			$this->itens[$i] = array(
				'img_id' => $lista['id_img'],
				'img_nome'=> Rotas::imageLink($lista['nome_img'],150,150),
				'img_link'=> Rotas::imageLink($lista['nome_img'],500,500),
				'pro_id' => $lista['produto_id'],
				'img_pasta' => $lista['pasta_img']
			);
		  $i++;
		endwhile;
	}

}
?>