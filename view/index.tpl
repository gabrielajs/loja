<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{$TEMA}/tema/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{$TEMA}/tema/css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Index</title>
</head>
<body>
<header class="">
  <div class="container pd-site">
    <h5 class="text-uppercase">Nome do Site</h5>
  </div>
  <!-- INICIO MENU -->
  <nav class="navbar navbar-expand-lg navbar-light color-bg">
    <div class="collapse navbar-collapse container" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-color" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-color" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Camisas
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Femininas</a>
          <a class="dropdown-item" href="#">Masculinas</a>
        </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-color" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vestidos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Curtos</a>
            <a class="dropdown-item" href="#">Longos</a>
            <a class="dropdown-item" href="#">Festas</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- FIM MENU -->
</header>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 bg-light">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#">Camisas</a>
          </li>
          <li class="nav-item">
            <a href="#">Vestidos</a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9">
      <div  arial-label="breadcrumb">
        <ol class="breadcrumb bg-caminho">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Camisas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </div>
    </main>
  </div>
</div>
</body>
</html>