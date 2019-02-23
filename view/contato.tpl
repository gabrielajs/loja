<h1 class="text-center">Entre em contato</h1>
<form action="envio.php">
	<div class="form-group">
	    <label for="setor">Setor</label>
	    <select class="form-control" id="setor" name="setor">
	      <option>Reclamação</option>
	      <option>Elogios</option>
	      <option>Financeiro</option>
	    </select>
  	</div>
	<div class="form-group">
	    <label for="nome">Nome</label>
		<input type="text" class="form-control" id="nome" placeholder="Nome">
	</div>
	<div class="row">
	    <div class="col">
	    	<label for="cidade">Cidade</label>
			<input type="text" class="form-control" id="cidade" placeholder="Cidade">
	    </div>
	    <div class="col">
	    	<label for="telefone">Telefone</label>
			<input type="text" class="form-control" id="telefone" placeholder="telefone">
	    </div>
	</div>
	<div class="form-group">
	    <label for="email">E-mail</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="e-mail">
	</div>
	<div class="form-group">
    <label for="comentario">Comentario</label>
    <textarea class="form-control" id="comentario" rows="3" name="mensagem"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>