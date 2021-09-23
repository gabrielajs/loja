<?php

/** Classe do menu do site */

class Menu extends Conexao
{

    private $nome;
    private $slug;
    private $status;

    function __construct()
    {
        parent::__construct();
    }

    //buscando todos os menu
    function getMenu()
    {
        $query = "SELECT * FROM {$this->prefix}categoria WHERE c_status = 'A' ORDER BY c_nome ASC";
        $this->executeSql($query);
        $this->getLista();
    }

    //chamando itens da consulta
    function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()) :
            $this->itens[$i] = array(
                'm_id' => $lista['c_id'],
                'm_nome' => $lista['c_nome'],
                'm_slug' => $lista['c_slug'],
                'm_status' => $lista['c_status'],
                'm_link' => Rotas::pageProduto() . '/' . $lista['c_id'] . '/' . $lista['c_slug']
            );
            $i++;
        endwhile;
    }
}
