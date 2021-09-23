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
    <link rel="stylesheet" href="{$VIEW}/tema/css/produto.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{$VIEW}/tema/js/jquery.js"></script>
    <script type="text/javascript" src="{$VIEW}/tema/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        {include file="cabecalho-site.tpl"}
    </header>
    <section class="container">
        {php}
            Rotas::getPagina();
        {/php}
    </section>

</body>
</html>