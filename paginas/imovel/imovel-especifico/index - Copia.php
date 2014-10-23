<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/header.php" ?>
<link rel="stylesheet" href="/css/imovel-detalhado.css">

<!--SLIDE IMOVEL SELECIONADO-->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="/paginas/imovel/imovel-especifico/css/fotorama.css" rel="stylesheet">
<script src="/paginas/imovel/imovel-especifico/js/fotorama.js"></script>
<!--SLIDE IMOVEL SELECIONADO-->

<!--SLIDE SHOW OUTRO IMOVEIS-->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<style type="text/css" >
		#owl-demo .item{
		  margin: 4px;
		}
		#owl-demo .item img{
		  display: block;
		  width: 100%;
		  height: auto;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
 
		  $("#owl-demo").owlCarousel({
		 
		      autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
		      items : 4,
		      itemsDesktop : [1199,3],
		      itemsDesktopSmall : [979,3]
		 
		  }); 
		});
	</script>
<!---->
<div class="row" id="imovel-detalhes">
	<div class="col-xs-12" >
			<!--FILTRO-->
		<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/buscar.php" ?>
			<!--FOTOS DETALHADAS-->
			<div class="row" id="fotos-detalhes">
				<!--DESCRIÇÃO DO IMOVEL-->
				<div class="col-xs-12" id="descricao-principal">
					<h2>Referencia: xxx</h2>
				</div>

				<!--SLIDE IMOVEL SELECIONADO-->
				<div class="col-xs-8">
					<div class="fotorama" data-nav="thumbs" data-loop="true" data-width="600" data-ratio="700/467" data-max-width="100%">
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>	
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					</div>
				</div>
				<!--SLIDE IMOVEL SELECIONADO-->

				<!--FORMULARIO-->
				<div class="col-xs-4" id="formulario-contato">
					<h3>CONTATO</h3>
		          <form action="" class="form form-horizontal">
		            <div class="form-group">
		              <div class="col-xs-12">
		                <input type="text" class="form-control" id="cNome" name="tNome" placeholder="Nome Completo">
		              </div>
		            </div>
		            <div class="form-group">
		                <div class="col-xs-12">
		                  <input type="tel" class="form-control" id="cTelefone" name="tTelefone" placeholder="Telefone">
		                </div>
		              </div>
		            <div class="form-group">
		              <div class="col-xs-12">
		                 <input type="email" class="form-control" id="cEmail" name="tEmail" placeholder="E-mail">
		              </div>
		             </div>
		            <div class="form-group">
		                <div class="col-xs-12">
		                  <textarea class="form-control" name="tMensagem" placeholder="Mensagem" rows="6" cols="43" style="margin: 0px; max-height: 120px; max-width: 280px;"></textarea>
		                </div>
		              </div>
		              <div class="form-group">
		                <div class="col-xs-offset-4 col-xs-6 ">
		                  <button type="submit" name="tEnviar" id="cEnviar" class="btn btn-info">Enviar</button>
		                </div>
		              </div>
		          </form>
				</div> <!--FIM DO FORMULARIO-->
			</div>
			<!--DESCRIÇÃO DO IMOVEL-->
			<div class="row" id="descricao-do-imovel">
				<div class="col-xs-12" >
					<ul class="nav nav-tabs" role="tablist">
						  <li class="active"><a href="#cEspecificacao" role="tab" data-toggle="tab">Especificação</a></li>
						  <li><a href="#cMapa" role="tab" data-toggle="tab">Mapa</a></li>
						  <li><a href="#cVideo" role="tab" data-toggle="tab">Vídeo</a></li>
					</ul>
				<!-- Tab panes -->
					<div class="tab-content" style="padding: 5px 10px;">
						  <div class="tab-pane fade in active" id="cEspecificacao">
						  	<ul>
						  		<li>
						  			<p class="text-left">Referencia: <span>xxxxxx</span></p>
						  		</li>
						  		<li>
						  			<p class="text-left">Bairro: <span>xxxxxxxxx</span></p>
						  		</li>
						  		<li>
						  			<p class="text-left">Quantidade de quarto(s): <span>xxxxxxxxx</span></p>
						  		</li>
						  		<li>
						  			<p class="text-left">Quantidade de suite(s): <span>xxxxxxxxxxxx</span></p>
						  		</li>
						  		<li>
						  			<p class="text-left">Quantidade de Garagem: <span>xxxxxxxxxxxx</span></p>
						  		</li>
						  		<li>
						  			<p class="text-left">Outros: <span>xxxxxxxxxxxxx</span></p>
						  		</li>
						  	</ul>
						  </div>
						  <div class="tab-pane fade" id="cMapa">
						  	<iframe class="endo-mapa" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=203815559016864751127.0004ff7cd23a2fa0978ae&amp;hl=pt-BR&amp;ie=UTF8&amp;t=m&amp;z=17&amp;output=embed"></iframe>
						  </div>
						  <div class="tab-pane fade" id="cVideo">
						  	<iframe width="100%" height="400" src="//www.youtube.com/embed/gCYcHz2k5x0" frameborder="0" allowfullscreen></iframe>	
						  </div>
					</div>
				</div>
			</div>

			<!--OUTROS IMOVEIS-->
			<div class="row" id="outros-imoveis">
				<div class="col-xs-12">
					<h2 class="title-kananda">IMÓVEIS SIMILARES</h2>
				</div>
				<div class="col-xs-12">
					<div id="owl-demo">
					  <div class="item"><a href="#"><img src="img/owl1.jpg" ></a></div>
					  <div class="item"><a href=""><img src="img/owl2.jpg" ></a></div>
					  <div class="item"><a href=""><img src="img/owl3.jpg" ></a></div>
					  <div class="item"><a href=""><img src="img/owl4.jpg" ></a></div>
					  <div class="item"><a href=""><img src="img/owl5.jpg" ></a></div>
					  <div class="item"><a href=""><img src="img/owl6.jpg" ></a></div>
					  <div class="item"><a href=""><img src="img/owl7.jpg" ></a></div>
					  <div class="item"><a href=""><img src="img/owl8.jpg" ></a></div> 
					</div>
				</div>
			</div>
	</div><!--Fim do detalhes imoveis-->
</div>

<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/footer.php" ?>