<h2 class="text-center">Fale Conosco</h2>
<br>
<form class="container" method="get" action="envio">
    <div class="form-group">
        <label for="nome">Nome completo<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="nome" id="nome" >
        <span class="msg"></span>
    </div>
    <div class="form-group">
        <label for="email">E-mail<span class="text-danger">*</span></label>
        <input type="email" class="form-control" name="email" id="email">
        <span class="msg"></span>
    </div>
    <div class="form-group">
        <label for="tipo">Tipo<span class="text-danger">*</span></label>
        <select class="form-control" id="tipo" name="tipo">
            <option value="sugestao">Sugestão</option>
            <option value="reclamacao">Reclamação</option>
            <option value="elogio">Elogio</option>
            <option value="duvida">Dúvida</option>
        </select>
        <span class="msg"></span>
    </div>
    <div class="form-group">
        <label for="texto">Digite seu texto<span class="text-danger">*</span></label>
        <textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
        <span class="msg"></span>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
