<?php

class Pedido extends Conexao
{
    function __construct()
    {
        parent::__construct();
    }

    function pedidoSalvar($cliente, $cod, $ref, $freteValor = NULL, $freteTipo = NULL)
    {
        $retorno = FALSE;

        $query = "INSERT INTO " . $this->prefix . "pedido (id_cliente, data_ped, hora_ped, cod_ped, frete_valor_ped, frete_tipo_ped, ref_ped)
                VALUES (:id_cliente, :data_ped, :hora_ped, :cod_ped, :frete_valor, :frete_tipo, :ref_ped)";

        $params = array(
            ':id_cliente' => (int)$cliente,
            ':cod_ped' => $cod,
            ':ref_ped' => $ref,
            ':frete_valor' => $freteValor,
            ':frete_tipo' => $freteTipo,
            ':data_ped' => Sistema::DataAtualUS(),
            ':hora_ped' => Sistema::HoraAtual()
        );

        $this->executeSql($query, $params);

        //salvando itens do pedido
        $this->itensSalvar($cod);

        $retorno = TRUE;
        return $retorno;
    }

    function itensSalvar($cod)
    {
        $carrinho = new Carrinho();

        foreach($carrinho->getCarrinho() as $item):
            $query = "INSERT INTO" .$this->prefix."pedidoitens (id_produto, valor_pedItem, qtd_pedItem, ped_cod_pedItem) VALUES (:produto, :valor, :qtd, :ped_cod)";

            $params = array(
                ':produto' => $item['p_id'],
                ':valor' => $item['p_valor'],
                ':qtd' => (int)$item['p_qtd'],
                ':ped_cod' => $cod
            );

            $this->executeSql($query, $params);
        endforeach;
    }
}
