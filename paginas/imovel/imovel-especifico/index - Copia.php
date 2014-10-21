<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/header.php" ?>
<link rel="stylesheet" href="/css/imovel-detalhado.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="/paginas/imovel/imovel-especifico/css/fotorama.css" rel="stylesheet">
<script src="/paginas/imovel/imovel-especifico/js/fotorama.js"></script>
<!---->
	<link rel="stylesheet" href="/paginas/imovel/imovel-especifico/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/paginas/imovel/imovel-especifico/css/owl.theme.css">
	<script src="/paginas/imovel/imovel-especifico/js/jquery-1.9.1.min.js"></script>
	<script src="/paginas/imovel/imovel-especifico/js/owl.carousel.js"></script>
	<script src="/paginas/imovel/imovel-especifico/js/effect.carousel.js"></script>
<!---->
<div class="row" id="imovel-detalhes">
	<div class="col-xs-12" >
			<!--FILTRO-->
		<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/buscar.php" ?>
			<!--FOTOS DETALHADAS-->
			<div class="row" id="fotos-detalhes">
				<!--DESCRIÇÃO DO IMOVEL-->
				<div class="col-xs-12" id="descricao-principal">
					<h2>Lorem ipsum do imóvel</h2>
					<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tenetur et quibusdam, ab perspiciatis earum, cum enim rem velit autem veritatis necessitatibus repellat minima mollitia at dolores praesentium iure fugiat.</h4>
				</div>
				<!--FOTO selecionada-->

				<div class="col-xs-7">
					<div class="fotorama" data-nav="thumbs" data-loop="true" data-width="600" data-ratio="700/467" data-max-width="100%">
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>	
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					  <a href="/img/residencia-a.png"><img src="/img/residencia-a.png"></a>
					</div>
				</div>

				<!--FOTOS SELECINADA-->
				<!--FORMULARIO-->
				<div class="col-xs-4" id="formulario-contato">
					<h3>CONTATO</h3>
		          <form action="" class="form form-horizontal">
		            <div class="form-group">
		              <label for="cNome" class="col-xs-3 control-label">Nome:</label>
		              <div class="col-xs-9">
		                <input type="text" class="form-control" id="cNome" name="tNome" placeholder="Nome Completo">
		              </div>
		            </div>
		            <div class="form-group">
		              <label for="cTelefone" class="col-xs-3 control-label">Telefone:</label>
		                <div class="col-xs-9">
		                  <input type="tel" class="form-control" id="cTelefone" name="tTelefone" placeholder="(99) 9999-9999">
		                </div>
		              </div>
		            <div class="form-group">
		              <label for="cEmail" class="col-xs-3 control-label">E-mail:</label>
		              <div class="col-xs-9">
		                 <input type="tel" class="form-control" id="cEmail" name="tEmail" placeholder="email@email.com">
		              </div>
		             </div>
		            <div class="form-group">
		              <label for="cMensagem" class="col-xs-3 control-label">Mensagem:</label>
		                <div class="col-xs-9">
		                  <textarea class="form-control" id="cMensagem" name="tMensagem" rows="3" placeholder="Informe sua mensagem"></textarea>
		                </div>
		              </div>
		              <div class="form-group">
		                <div class="col-xs-offset-5 col-xs-6 ">
		                  <button type="submit" name="tEnviar" id="cEnviar" class="btn btn-info">Enviar</button>
		                </div>
		              </div>
		          </form>
				</div> <!--FIM DO FORMULARIO-->
			</div>
			<!--DESCRIÇÃO DO IMOVEL-->
			<div class="row" id="descricao-do-imovel">
				<div class="col-xs-12" >
					<ul class="nav nav-pills">
						<li class="active"><a href="">Especificação</a></li>
						<li><a href="">Mapa</a></li>
						<li><a href="">Vídeo</a></li>
					</ul>
				</div>
			</div>

			<!--OUTROS IMOVEIS-->
			<div class="row" id="outros-imoveis">
				<div class="col-xs-12">
					<div id="owl-demo" class="owl-carousel owl-theme">
					  <div class="item"><a href=""><img src="img/owl1.jpg" ></a></div>
					  <div class="item"><img src="img/owl2.jpg" ></div>
					  <div class="item"><img src="img/owl3.jpg" ></div>
					  <div class="item"><img src="img/owl4.jpg" ></div>
					  <div class="item"><img src="img/owl5.jpg" ></div>
					  <div class="item"><img src="img/owl6.jpg" ></div>
					</div>
				</div>
			</div>
	</div><!--Fim do detalhes imoveis-->
</div>
<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/footer.php" ?>