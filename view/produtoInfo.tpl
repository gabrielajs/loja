{foreach from=$PRO item=P}
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-3">
                    <ul class="nav nav-tabs tabs-left">
                        {foreach from=$IMG item=I}
                            <li>
                                <a href="#" data-toggle="tab">
                                    <img src="{$I.i_nome}" class="img-fluid">
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                </div>
                <div class="col-9 tab-content">
                    <img src="{$P.p_img}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="info">
                <p class="namep"><b>{$P.p_nome}</b></p>
                <p>{$P.p_referencia}</p>
                <p><b class="font-p">R${$P.p_valor_br}</b></p>
            </div>
            <hr />
            <div class="info-en">
                <form action="{$COMPRAR}" method="post">
                    <input type="hidden"  name="p_id" value="{$P.p_id}">
                    <input type="hidden"  name="acao" value="add">
                    <button type="submit" class="btn btn-lg btn-outline-primary">Comprar</button><br>
                </form>
                
                <form class="form-inline frete" method="post" action="">
                    <div class="form-group mb-2">
                        <input type="text" id="cep" name="cep" class="form-control" placeholder="Calcular CEP">
                    </div>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary mb-2">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col info-en">
            <p><b>Descrição</b></p>
            <p class="firt-l text-justify">{$P.p_descricao}</p>
        </div>
    </div>
{/foreach}