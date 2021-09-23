<?php

/** Configurando conexao com o banco de dados utilizando PDO */

class Conexao extends Config
{
    private $host;
    private $usuario;
    private $senha;
    private $banco;

    protected $obj;
    protected $itens = array();
    protected $prefix;

    public $paginacaoLink;
    public $limite;
    public $inicio;
    public $totalPaginas;

    function __construct()
    {
        $this->host = self::DB_HOST;
        $this->usuario = self::DB_USER;
        $this->senha = self::DB_SENHA;
        $this->banco = self::DB_BANCO;
        $this->prefix = self::DB_PREFIX;

        try {
            if ($this->conectar() == null) :
                $this->conectar();
            endif;
        } catch (Exception $e) {
            exit($e->getMessage() . '<h2>Erro na conexão</h2>');
        }
    }

    private function conectar()
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );

        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->usuario, $this->senha, $options);

        return $link;
    }

    //executando uma consulta sql
    function executeSql($query, array $params = NULL)
    {
        $this->obj = $this->conectar()->prepare($query);

        if (is_array($params) && count($params) > 0) :
            foreach ($params as $key => $value) {
                $this->obj->bindValue($key, $value);
            }
        endif;

        return $this->obj->execute();
    }

    function listarDados()
    {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function totalDados()
    {
        return $this->obj->rowCount();
    }

    //verifica itens
    function getItens()
    {
        return $this->itens;
    }

    /** Iniciando configuração da paginação do site */
    function paginacaoLink($campo, $tabela)
    {
        $pag = new Paginacao();
        $pag->getPaginacao($campo, $tabela);
        $this->paginacaoLink = $pag->link;

        $this->totalPaginas = $pag->totalPaginas;
        $this->inicio = $pag->inicio;
        $this->limite = $pag->limite;

        if ($this->totalPaginas > 0) :
            return "LIMIT {$this->inicio}, {$this->limite}";
        else :
            return " ";
        endif;
    }

    protected function btnPaginacao($paginas = array())
    {
        $pag = '<ul class="pagination">';
        $pag .= '<li class="page-item">';
        $pag .= '<a class="page-link" href="" tabindex="-1" aria-disabled="true">Anterior</a>';
        $pag .= '</li>';

        foreach ($paginas as $p) :
            $pag .= '<li class="page-item"><a class="page-link" href="?p=' . $p . '">' . $p . '</a>';
            $pag .= '</li>';
        endforeach;

        $pag .= '<a class="page-link" href="">Proximo</a>';
        $pag .= '</ul>';

        if ($this->totalPaginas > 1) :
            return $pag;
        endif;
    }

    function exibePaginacao()
    {
        return $this->btnPaginacao($this->paginacaoLink);
    }
}
