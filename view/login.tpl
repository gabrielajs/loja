{if $LOGADO == TRUE}
    {include file="cliente-logado.tpl"}
{else}
<div>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 margin-auto">
        <form role="form" name="login" method="post" action="">
            <fieldset>
                <h2 class="text-center">Já sou cliente</h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg"
                        placeholder="Digite seu e-mail">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" id="senha" class="form-control input-lg"
                        placeholder="Digite sua senha">
                </div>
                <span class="button-checkbox">
                    <a href="#" class="btn btn-link pull-right">Esqueci senha</a>
                </span>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="{$CLIENTE}" class="btn btn-lg btn-primary btn-block">Criar Conta</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
{/if}