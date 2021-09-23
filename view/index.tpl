<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$NOME_SITE}</title>
    <link rel="stylesheet" href="{$VIEW}/tema/css/header.css">
    <link rel="stylesheet" href="{$VIEW}/tema/css/corpo.css">
    <link rel="stylesheet" href="{$VIEW}/tema/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$VIEW}/tema/fontawesome/css/all.css">
    <link rel="stylesheet" href="{$VIEW}/tema/css/style-all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{$VIEW}/tema/js/jquery.js"></script>
    <script type="text/javascript" src="{$VIEW}/tema/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        {include file="cabecalho-site.tpl"}
    </header>

    <section id="container-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                {foreach from=$PRO item=P key=K}
                    <li data-target="#carouselExampleIndicators" data-slide-to="{$K}" {if $K==1}class="active" {/if}></li>
                {/foreach}
            </ol>
            <div class="carousel-inner">
                {foreach from=$PRO item=P key=K}
                    <div class="carousel-item {if $K==1}active{/if}">
                        <a href="{$INFO_P}/{$P.p_id}/{$P.p_slug}">
                            <img src="{$P.p_img}" class="d-block w-100" alt="{$P.p_nome}">
                        </a>
                    </div>
                {/foreach}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Proximo</span>
            </a>
        </div>
    </section>

    <section class="container">
        <h2>Produtos</h2>
        <div class="row row-cols-1 row-cols-md-3">
            {foreach from=$PRO item=P}
                <div class="col mb-4">
                    <a href="{$INFO_P}/{$P.p_id}/{$P.p_slug}">
                        <div class="card">
                            <img src="{$P.p_img}" class="card-img-top" alt="{$P.p_nome}">
                            <div class="card-body">
                                <h5 class="card-title">{$P.p_nome}</h5>
                                <p class="card-text">R$ {$P.p_valor_br}</p>
                            </div>
                        </div>
                    </a>
                </div>
            {/foreach}
        </div>
    </section>

</body>

</html>