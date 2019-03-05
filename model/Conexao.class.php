<?php 
Class Conexao extends Config{
	private $host,$user,$senha,$banco;
	protected $obj, $prefix, $itens = array();
	public $paginacaoLink, $totalPages, $limite, $inicio;

	function __construct(){
		$this->host = self::BD_HOST;
		$this->user = self::BD_USER;
		$this->senha = self::BD_SENHA;
		$this->banco = self::BD_BANCO;
		$this->prefix = self::BD_PREFIX;

		try{
			if($this->conectar() == null):
				$this->conectar();
			endif;
		} catch(Exception $e){
			exit($e->getMessage(). '<h3>ERRO NA CONEXAO COM O BANCO DE DADOS</h3>');
		}
	}

	private function conectar(){
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
		);
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco};", $this->user, $this->senha, $options);
		return $link;
	}
	/*EXECUTA QUERY*/
	function executeSQL($query, array $params = NULL){
		$this->obj = $this->conectar()->prepare($query);

		/* VERIFICANDO PARAMETROS DA URL*/
		if(count($params) > 0):
			foreach($params as $key=> $value):
				$this->obj->bindvalue($key, $value);
			endforeach;
		endif;

		return $this->obj->execute();

	}
	/*LISTA DADOS DE QUERY*/
	function listarDados(){
		return $this->obj->fetch(PDO::FETCH_ASSOC);
	}
	/*VERIFICA QUANTOS DADOS EXISTEM*/
	function totalDados(){
		return $this->obj->rowCount();
	}
	/*RETORNA TODOS OS DADOS
	  DE UMA BUSCA*/
	function getItens(){
		return $this->itens;
	}

	/* PAGINACAO */
	function pageLink($campo, $tabela){
		$pag = new Paginacao();
		$pag->getPaginacao($campo, $tabela);
		$this->paginacaoLink = $pag->link;
		$this->totalPages = $pag->totalPages;
		$this->limite = $pag->limite;
		$this->inicio = $pag->inicio;

		$inicio = $pag->inicio;
		$limite = $pag->limite;

		if($this->totalPages > 0):
			return " LIMIT {$inicio}, {$limite}";
		else:
			return "";
		endif;
	}

	protected function paginacao($paginas=array()){
		$pag = '<ul class="pagination">';
		$pag .= '<li class="page-item"><a href="?p=1" class="page-link">Inicio</a></li>';

		foreach($paginas as $p):
			$pag .= '<li class="page-item"><a href="?p='.$p.'" class="page-link"> '.$p.' </a></li>';
		endforeach;
		
		$pag .= '<li class="page-item"><a href="?p='.$this->totalPages.'" class="page-link">Fim</a></li>';
		$pag .= '</ul>';

		/*caso não tiver nenhum produto
		  não será necessario mostrar a
		  paginação */
		if($this->totalPages > 1){
			return $pag;
		}	
	}

	

	function showPaginacao(){
		return $this->paginacao($this->paginacaoLink);
	}
}
?>