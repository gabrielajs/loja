<?php

/** Classe de configuracoes do site */

class Configuracoes extends Conexao
{
    private $nome_site;
    private $logo;

    function __construct()
    {
        parent::__construct();
    }

    //buscando dados de configuracao
    function getConfiguracao()
    {
        $query = "SELECT * FROM {$this->prefix}conf";
        $this->executeSql($query);
        $this->getLista();
    }

    //chamando itens da consulta
    function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()) :
            $this->itens[$i] = array(
                'c_id' => $lista['id'],
                'c_nome_site' => $lista['nome_site'],
                'c_logo' => Rotas::imgConf($lista['logo']),
                'c_email' => $lista['email'],
                'c_email_copia' => $lista['email_copia']
            );
            $i++;
        endwhile;
    }
}
