<h3>Lista de produtos</h3>
<hr> 
<section id="produtos" class="row">  
	<ul style="list-style: none;padding: 0 5px 5px 0;">    		  
		<div class="row" id="pularliha">
		{foreach from=$PROD item=P}
		    <li class="">
		        <div >
		            <a href="{$INFO_PRO}/{$P.p_id}/{$P.p_slug}">
						<img src="{$P.p_img_g}" class="thumbnail"> 
		                <div class="caption">
		                    <h4 class="text-center">{$P.p_nome}</h4> 
		                    <h3 class="text-center text-danger">{$P.p_valor}</h3>
		                </div>
		            </a>
		        </div>
		    </li>
		{/foreach}
		</div>   
	</ul>
</section>
      
<section id="pagincao" class="row">
    <center>PAGINAS</center>
</section>

