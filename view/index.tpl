<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{$TEMA}/tema/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{$TEMA}/tema/css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Index</title>
</head>
<body>
<div class="container-fluid">
  <!-- TOPO -->
  <div class="" id="header">
    <div class="container pd-site">
      <span class="text-uppercase">Nome do Site</span>
      <form class="form-inline group-header">
        <div class="">
          <input type="text" class="form-control" id="inp-search" placeholder="Pesquisar">
        </div>
        <button type="button" class="btn btn-outline-success" id="btn-m-left">Pesquisar</button>
      </form>
      <div class="group-header">
        <a href="{$CARRINHO}" title="carrinho" id="icon-cart">
        <img src="https://img.icons8.com/material/24/000000/shopping-cart.png">
        </a>
        <button type="button" class="btn btn-success" id="btn-m-left">Entrar ou Cadastrar</button>
      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light color-bg">
      <div class="collapse navbar-collapse container" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-color" href="{$HOME}">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-color" href="{$PRODUTO}">Todos Produtos</a>
          </li>
        </ul>
      </div>
    </nav> 
  </div>



  <!-- CONTEUDO -->
  <div class="row" id="conteudo">
    <div class="col-sm-2">
      <div class="list-group">
        <a class="list-group-item" href="#">Categorias</a>
        
        {foreach from=$CATEGORIA item=C}
          <a class="list-group-item" href="#">{$C.c_nome}</a>
        {/foreach}
      </div>
    </div>






    <div class="col-sm-8">
      {php}
        Rotas::getPagina();
      {/php}
    </div>
  </div>


  <!-- RODAPE 
  <div class="row" id="footer">
    <div class="col-sm-1">
      <p>redes sociais</p>
    </div>

    <div class="col-sm-1">
      <p>info site</p>
    </div>

    <div class="col-sm-1">
      <p>pagamentos</p>
    </div>

    <div class="col-sm-1">
      <a href="{$CONTATO}">Fale Conosco</a>
    </div>
  </div>-->
</div>
</body>
</html>