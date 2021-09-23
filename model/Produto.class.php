<?php
class Produto extends Conexao
{
    function __construct()
    {
        parent::__construct();
    }

    //buscando todos os produtos
    function getProdutos()
    {
        $query = "SELECT * FROM {$this->prefix}produto p INNER JOIN {$this->prefix}categoria c ON p.id_categoria = c.c_id 
                  WHERE p.status = 'A' ORDER BY p.id DESC ";
        $query .= $this->paginacaoLink("id", $this->prefix . "produto");

        $this->executeSql($query);
        $this->getLista();
    }

    //buscando produto por ID 
    function getProdutosId($id)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM {$this->prefix}produto p INNER JOIN {$this->prefix}categoria c ON p.id_categoria = c.c_id 
                  AND p.id = :id";
        $params = array(':id' => (int)$id);
        $this->executeSql($query, $params);
        $this->getLista();
    }

    //buscando produtos baseado na categoria
    function getProdutosCat($id)
    {
        $query = "SELECT * FROM {$this->prefix}produto p INNER JOIN {$this->prefix}categoria c ON p.id_categoria = c.c_id AND p.id_categoria = :id ";
        $query .= $this->paginacaoLink("id", $this->prefix . "produto WHERE id_categoria=" . (int)$id);
        
        $params = array(':id' => (int)$id);
        $this->executeSql($query, $params);
        $this->getLista();
    }

    //buscando todos os produtos ativos para pag. inicial
    function inicialProdutos()
    {
        $query = "SELECT * FROM {$this->prefix}produto WHERE status = 'A' AND pg_inicial = 'S' ORDER BY id DESC";
        $this->executeSql($query);
        $this->getLista();
    }

    //buscando produtos que deve ser mostrado no banner principal
    function bannerProdutos()
    {
        $query = "SELECT * FROM {$this->prefix}produto WHERE status = 'A' AND banner = 'S' ORDER BY id";
        $this->executeSql($query);
        $this->getLista();
    }

    //trazendo lista de produto
    function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()) :
            $this->itens[$i] = array(
                'p_id' => $lista['id'],
                'p_categoria' => $lista['id_categoria'],
                'p_nome' => $lista['nome'],
                'p_descricao' => $lista['descricao'],
                'p_peso' => $lista['peso'],
                'p_valor_br' => Sistema::MoedaBR($lista['valor']),
                //'p_valor' => $lista['valor'],
                'p_valor' => $lista['valor'],
                'p_altura' => $lista['altura'],
                'p_largura' => $lista['largura'],
                'p_comprimento' => $lista['comprimento'],
                'p_img' => Rotas::imgLink($lista['img'], 600, 600),
                'p_slug' => $lista['slug'],
                'p_estoque' => $lista['estoque'],
                'p_modelo' => $lista['modelo'],
                'p_referencia' => $lista['referencia'],
                'p_fabricante' => $lista['fabricante'],
                'p_produto' => $lista['produto'],
                'p_status' => $lista['status'],
                'p_frete' => $lista['frete'],
                'p_inicial' => $lista['pg_inicial'],
                'banner' => $lista['banner']
            );
            $i++;
        endwhile;
    }
}
