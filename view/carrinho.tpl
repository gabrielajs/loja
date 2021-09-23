<div class="container">
    <div>
        <a href="#" class="link-primary">continuar comprando</a>
    </div>
    <br>
    <div class="row">
        <div class="col-8">
            {foreach from=$PRO item=P}
                <div class="card mb-3 bg-light " style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{$P.p_img}" alt="{$P.p_nome}" class="figure-img img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title namep">{$P.p_nome}</h5>
                                <p class="card-text">R$ {$P.p_valor_br}</p>
                                <p class="card-text"><small class="text-muted">Quantidade</small><input type=number></p>
                            </div>
                        </div>
                        <form action={$COMPRAR} method="POST" name="apagarProduto">
                            <input type="hidden" name="p_id" value="{$P.p_id}">
                            <input type="hidden" name="acao" value="apagarPro">

                            <div>
                                <button class="btn-excluir col-md-2 item-center" title="{$P.p_id}"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            {/foreach}
        </div>

        <div class="col-4 bg-light">
            <p class="text-center">Resumo da Compra</p>
            <h5 class="card-title">SubTotal R${$TOTAL}</h5>
            <h5 class="card-title">Frete R$</h5>
            <hr>
            <h5 class="card-title">Valor Total R$</h5>
            <a href="{$PEDIDO}" class="btn btn-success">Confirmar Pedido</a>
        </div>
    </div>
</div>