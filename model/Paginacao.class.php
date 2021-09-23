<?php

class Paginacao extends Conexao
{
    public $limite;
    public $inicio;
    public $totalPaginas;
    public $link = array();

    function getPaginacao($campo, $tabela)
    {
        $query = "SELECT {$campo} FROM {$tabela}";
        $this->executeSql($query);
        $total = $this->totalDados();

        $this->limite = Config::LIMIT_PAGE;
        $paginas = ceil($total / $this->limite);

        $this->totalPaginas = $paginas;

        $p = (int) isset($_GET['p']) ? $_GET['p'] : 1;

        if($p > $paginas):
            $p = $paginas;
        endif;

        $this->inicio = ($p * $this->limite) - $this->limite;

        $tolerancia = 2;
        $mostrar = $p + $tolerancia;

        if($mostrar > $paginas):
            $mostrar = $paginas;
        endif;

        for ($i = ($p - $tolerancia); $i <= $mostrar ; $i++):
            if($i < 1):
                $i = 1;
            endif;
            array_push($this->link, $i);
        endfor;
    }
}
