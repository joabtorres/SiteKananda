<!--SLIDE IMOVEL SELECIONADO-->

<link href="<?= RAIZ ?>paginas/imovel/css/fotorama.css" rel="stylesheet">
<script src="<?= RAIZ ?>paginas/imovel/js/fotorama.js"></script>
<!--SLIDE IMOVEL SELECIONADO-->

<!--SLIDE SHOW OUTRO IMOVEIS-->
	<link rel="stylesheet" href="<?= RAIZ ?>paginas/imovel/css/jssor.css">
    
    <script type="text/javascript" src="<?= RAIZ ?>paginas/imovel/js/jssor.js"></script>
    <script type="text/javascript" src="<?= RAIZ ?>paginas/imovel/js/jssor.slider.min.js"></script>
    <script src="<?= RAIZ ?>paginas/imovel/js/jssor-effect.js"></script>
<!---->
<link rel="stylesheet" href="<?= RAIZ ?>css/imovel-detalhado.css">
<div class="row" id="imovel-detalhes">
	<div class="col-xs-12" >
			<!--FILTRO-->
		<?php require RAIZ."paginas/subpaginas/buscar.php" ?>
			<!--FOTOS DETALHADAS-->
			<div class="row" id="fotos-detalhes">
				<!--DESCRIÇÃO DO IMOVEL-->
				<div class="col-xs-12" id="descricao-principal">
					<h2>Referência: xxx</h2>
				</div>

				<!--SLIDE IMOVEL SELECIONADO-->
				<div class="col-xs-8">
					<div class="fotorama" data-nav="thumbs" data-loop="true" data-width="600" data-height="400" data-max-width="100%">
					  <a href="<?= RAIZ ?>img/residencia-a.png"><img src="<?= RAIZ ?>img/residencia-a.png"></a>
					  <a href="<?= RAIZ ?>img/residencia-a.png"><img src="<?= RAIZ ?>img/residencia-a.png"></a>	
					  <a href="<?= RAIZ ?>img/residencia-a.png"><img src="<?= RAIZ ?>img/residencia-a.png"></a>
					  <a href="<?= RAIZ ?>img/residencia-a.png"><img src="<?= RAIZ ?>img/residencia-a.png"></a>
					  <a href="<?= RAIZ ?>img/residencia-a.png"><img src="<?= RAIZ ?>img/residencia-a.png"></a>
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
						  			<p class="text-left">Referência: <span>xxxxxx</span></p>
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
						  			<p class="text-left">Descrição: <span>xxxxxxxxxxxxx</span></p>
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
				<div class="col-xs-12" style="background: #C0BFC4; padding:5px;">
					<div id="slider1_container" class="container-slide">
				        <!-- Loading Screen -->
				        <div u="loading" class="loading-screen">
				            <div class="loading-1">
				            </div>
				            <div class="loading-2">
				            </div>
				        </div>
				        <!-- Slides Container -->
				        <div u="slides" class="slide-container">
				            <div><a href=""><img u="image" src="<?= RAIZ ?>paginas/imovel/img/ancient-lady/005.jpg"/></a></div>
				            <div><a href=""><img u="image" src="<?= RAIZ ?>paginas/imovel/img/ancient-lady/006.jpg" /></a></div>
				            <div><a href=""><img u="image" src="<?= RAIZ ?>paginas/imovel/img/ancient-lady/011.jpg" /></a></div>
				            <div><a href=""><img u="image" src="<?= RAIZ ?>paginas/imovel/img/ancient-lady/013.jpg" /></a></div>
				            <div><a href=""><img u="image" src="<?= RAIZ ?>paginas/imovel/img/ancient-lady/014.jpg" /></a></div>
				            <div><a href=""><img u="image" src="<?= RAIZ ?>paginas/imovel/img/ancient-lady/019.jpg" /></a></div>
				            <div><a href=""><img u="image" src="<?= RAIZ ?>paginas/imovel/img/ancient-lady/020.jpg" /></a></div>
				        </div>
				        <!-- bullet navigator container -->
				        <div u="navigator" class="jssorb03" id="navigator-slide" style="position: absolute; bottom: 4px; right: 6px;">
				            <!-- bullet navigator item prototype -->
				            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
				        </div>
				        <!-- Bullet Navigator Skin End -->
				        <!-- Arrow Left -->
				        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px; display:block;">
				        </span>
				        <!-- Arrow Right -->
				        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
				        </span> 
				    </div>
				</div>
			</div>
	</div><!--Fim do detalhes imoveis-->
</div>
