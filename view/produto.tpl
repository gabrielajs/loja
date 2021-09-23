<h2>Produtos</h2>

{if $TOTAL < 1}
    <div class="alert alert-secondary" role="alert">
        Nenhum resultado encontrado.
    </div>
{/if}

<div class="row row-cols-1 row-cols-md-3">
    {foreach from=$PRO item=P}
        <div class="col mb-4">
            <a href="{$INFO_P}/{$P.p_id}/{$P.p_slug}">
                <div class="card">
                    <img src="{$P.p_img}" class="card-img-top" alt="{$P.p_nome}">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">{$P.p_nome}</h5>
                        <p class="card-text">R$ {$P.p_valor_br}</p>
                    </div>
                </div>
            </a>
        </div>
    {/foreach}
</div>

<div>
    {$PAGINACAO}
</div>