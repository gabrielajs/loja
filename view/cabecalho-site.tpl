<div class="espacamento">
    <div class="container">
        <div class="f-left">
            {foreach from=$CONF item=C}
                <a href="{$HOME}"><img src="{$C.c_logo}" alt="logo" id="img-logo"></a>
            {/foreach}
        </div>

        <div id="busca" class="inline-block">
            <form id="form-busca">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pesquisa..." aria-label="Pesquisa..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </form>
        </div>

        <div id="icones" class="f-right inline-block">
            <div class="entrar-cadastrar inline-block">
                {if $LOGADO == TRUE}
                    <a href="{$LOGIN}"><span class="texto">Olá {$NOME}</span></a><br>
                    <a href="{$SAIR}" class="texto">Sair</a>
                {else}
                    <span class="texto">Bem vindo</span><br>
                    <a href="{$LOGIN}" class="texto">Entre ou Cadastre</a>
                {/if}
            </div>
            <div id="carrinho" class="f-right ">
                <a href=""><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="header-menu">
    <div class="container">
        <nav id="menu">
            <ul class="form-inline">
                <li><a href="{$HOME}">Início</a></li>
                {foreach from=$MENU item=M}
                    <li><a href="{$M.m_link}">{$M.m_nome}</a></li>
                {/foreach}
            </ul>
        </nav>
    </div>
</div>