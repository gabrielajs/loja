<?php 
Class Conexao extends Config{
	private $host,$user,$senha,$banco;
	protected $obj, $prefix; 
	protected $itens = array();
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
}
?>