<h1 class="title-one">Dados Pessoais</h1>

<form class="row g-3" name="cliente" id="cliente" method="post">
    <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="nome" class="form-control" id="nome" name="nome">
    </div>
    <div class="col-md-6">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="sobrenome" class="form-control" id="sobrenome" name="sobrenome">
    </div>
    <div class="col-md-3 mt-2">
        <label for="dataNasc" class="form-label">Data Nasc.</label>
        <input type="date" class="form-control" id="dataNasc" placeholder="00/00/0000" name="dataNasc">
    </div>
    <div class="col-md-3 mt-2">
        <label for="rg" class="form-label">RG</label>
        <input type="text" class="form-control" id="rg" name="rg">
    </div>
    <div class="col-md-3 mt-2">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf">
    </div>
    <div class="col-md-3 mt-2">
        <label for="telCelular" class="form-label">Tel. Celular</label>
        <input type="text" class="form-control" id="telCelular" placeholder="(dd) 00000-0000" name="telCelular">
    </div>
    <div class="col-md-6 mt-2">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" class="form-control" id="email" placeholder="email@email.com.br" name="email">
    </div>
    <div class="col-md-6 mt-2">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>

    <div class="col-md-12">
        <h1 class="title-one">Endereço de Cobrança</h1>
    </div>

    <div class="col-md-6">
        <label for="cep" class="form-label">CEP</label>
        <input type="cep" class="form-control" id="cep" placeholder="00000-000" name="cep">
    </div>
    <div class="col-md-6">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="endereco" class="form-control" id="endereco" name="endereco">
    </div>
    <div class="col-md-4 mt-2">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="bairro" class="form-control" id="bairro" name="bairro">
    </div>
    <div class="col-md-2 mt-2">
        <label for="numero" class="form-label">Número</label>
        <input type="numero" class="form-control" id="numero" name="numero">
    </div>
    <div class="col-md-4 mt-2">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="cidade" class="form-control" id="cidade" name="cidade">
    </div>
    <div class="col-md-2 mt-2">
        <label for="estado" class="form-label">Estado</label>
        <input type="estado" class="form-control" id="estado" name="estado">
    </div>

    <br>
    
    <div class="col-6 mt-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>

</form>