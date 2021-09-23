<?php

class Imagens extends Conexao
{
    function __construct()
    {
        parent::__construct();
    }

    function getImagem($pro)
    {
        $query = "SELECT * FROM {$this->prefix}imagem WHERE id_produto = :pro";
        $params = array(':pro'=> (int)$pro);
        $this->executeSql($query, $params);
        $this->getLista();
    }

    function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()) :
            $this->itens[$i] = array(
                'i_id' => $lista['i_id'],
                'id_produto' => $lista['id_produto'],
                'i_nome' => Rotas::imgLink($lista['i_nome'], 600, 600),
                'i_pasta' => $lista['i_pasta']
            );
            $i++;
        endwhile;
    }
}
