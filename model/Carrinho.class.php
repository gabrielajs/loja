<?php

class Carrinho
{
    private $totalValor;
    private $totalPeso;
    private $itens = array();

    function getCarrinho($sessao = NULL)
    {
        $i = 1;
        $subTotal = 1.00;
        $peso = 0;

        foreach ($_SESSION['PRO'] as $lista) :
            $subTotalUs = ($lista['VALOR'] * $lista['QTD']);
            $this->totalValor += $subTotalUs;

            $this->itens[$i] = array(
                'p_id' => $lista['ID'],
                'p_nome' => $lista['NOME'],
                'p_img' => $lista['IMG'],
                'p_frete' => $lista['FRETE'],
                'p_qtd' => $lista['QTD'],
                'p_valor' => $lista['VALOR'],
                'p_valor_br' => $lista['VALOR_BR'],
                'subTotal' => Sistema::MoedaBR($subTotal),
                'subTotalUs' => $subTotalUs
            );
            $i++;
        endforeach;

        if (count($this->itens) > 0) :
            return $this->itens;
        endif;
    }

    function total()
    {
        return $this->totalValor;
    }

    function peso()
    {
        return $this->peso;
    }

    function carrinhoADD($id)
    {
        $produtos = new Produto();
        $produtos->getProdutosId($id);

        foreach ($produtos->getItens() as $pro) :
            $ID = $pro['p_id'];
            $NOME = $pro['p_nome'];
            $VALOR = $pro['p_valor'];
            $VALOR_BR = $pro['p_valor_br'];
            $PESO = $pro['p_peso'];
            $QTD = 1;
            $IMG = $pro['p_img'];
            $LINK = Rotas::pageProdutoInfo() . '/' . $ID . '/' . $pro['slug'];
            $ACAO = $_POST['acao'];
        endforeach;

        switch ($ACAO):
            case 'add':
                if (!isset($_SESSION['PRO'][$ID]['ID'])) :
                    $_SESSION['PRO'][$ID]['ID'] = $ID;
                    $_SESSION['PRO'][$ID]['NOME'] = $NOME;
                    $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
                    $_SESSION['PRO'][$ID]['VALOR_BR'] = $VALOR_BR;
                    $_SESSION['PRO'][$ID]['PESO'] = $PESO;
                    $_SESSION['PRO'][$ID]['IMG'] = $IMG;
                    $_SESSION['PRO'][$ID]['QTD'] = $QTD;
                    $_SESSION['PRO'][$ID]['LINK'] = $LINK;
                else:
                    $_SESSION['PRO'][$ID]['QTD'] += $QTD;
                endif;
                    echo '<div class="alert alert-success" role="alert">Produto adicionando ao carrinho!</div>';
                break;

            case 'apagarPro':
                $this->deletarCarrinho($id);
                break;
        endswitch;
    }

    /** FUNÇÃO PARA LIMPAR CARRINHO - NÃO SERÁ MAIS UTILIZADO */
    private function limparCarrinho()
    {
        unset($_SESSION['PRO']);
    }

    private function deletarCarrinho($id)
    {
        unset($_SESSION['PRO'][$id]);
    }
}
