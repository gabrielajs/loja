<?php

Class Paginacao extends Conexao{
	public $limite, $inicio, $totalPages, $link = array();

	function getPaginacao($campo, $tabela){
		$query = "SELECT {$campo} FROM {$tabela}";
		$this->executeSQL($query);
		$total = $this->totalDados();

		$this->limite = Config::BD_LIMIT_PAG;
		/* TOTAL DE PRODUTOS DIVIDIO POR LIMITE DEFINIDO
		   CEIL ARREDONDA PARA CIMA*/
		$paginas = ceil($total / $this->limite);

		$this->totalPages = $paginas;

		$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

		if($p > $paginas):
			$p = $paginas;
		endif;

		$this->inicio = ($p * $this->limite) - $this->limite;

		$tolerancia = 4;
		$mostrar = $p + $tolerancia;
		if($mostrar > $paginas):
			$mostrar = $paginas;
		endif;

		for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
			if($i < 1):
				$i  = 1;
			endif;
			array_push($this->link, $i);
		endfor;
	}
}
?>