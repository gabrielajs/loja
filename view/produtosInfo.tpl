{foreach from=$PROD item=P}
	<h3 class="text-center">{$P.p_nome}</h3>
	<hr>

	<div class="row">
	    <div class="col-md-6 ">
	        <img class="thumbnail" src="{$P.p_img_g}" alt="" > 
	    </div>
	    <div class="col-md-6 thumbnail"> 
	    	<img src="{$TEMA}/imagens/logo-pagseguro.png" alt="">
	  		<hr>
	        <div class="col-md-6">
	           <h3 class="text-center preco">R${$P.p_valor}</h3>     
	        </div>
	        <div class="col-md-6">
	            <form name="carrinho" method="post" action="">
	                <input type="hidden" name="prod_id" value="{$P.p_id}">
	                <input type="hidden" name="acao" value="add">
	            	<button  class="btn btn-success btn-lg">Comprar</button>
	            </form>  
	        </div>
	    </div>
	</div>
	<div>
        <h4 class="text-center">Mais imagens</h4>
        <ul style="list-style: none">           
            <li class="col-md-3 ">
              	<img src="{$P.p_img_p}" alt="" class="thumbnail">
            </li>
        </ul>
    </div>
    <div>
        <h4 class="text-center">Descrição do produto</h4>
        <p>{$P.p_descricao}</p>
    </div>  
        <br>
        <br>
{/foreach}