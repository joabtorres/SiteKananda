<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/header.php" ?>
<link rel="stylesheet" href="/css/imovel-detalhado.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="/js/fotorama/fotorama.css" rel="stylesheet">
<script src="js/fotorama/fotorama.js"></script>
<div class="row" id="imovel-detalhes">
	<div class="col-xs-12" >
			<div class="row" id="filtro-detalhe">
				<div class="col-xs-12">
					<h3 >FILTRO</h3>
					
				<form action="" role="form" class="form">
					  <div class="form-group col-xs-2">
					    <label for="selecionaCidade">Cidade: </label>
					    <select name="select" id="selecionaCidade" class="form-control">
					            <option value="cidadeItaituba">Itaituba</option>
					    </select>
					  </div>
					  <div class="form-group col-xs-3">
					      <label for="selecionaImovel">Imóvel: </label>
					      <select name="select" id="selecionaImovel" class="form-control">
		                    <option value="areas-portuarias">Áreas Portuarías</option>
		                    <optgroup label="Casas">
		                    <option value="casaAluguel">Aluguel</option>
		                    <option value="casaVenda">A Venda</option>
		                  </optgroup>
		                  <option value="loteamento">Loteamentos</option>
		                  <option value="terrenosUrbanos">Terrenos Urbanos</option>
		                  <option value="terrenosRurais">Terrenos Rurais</option>
		                  </select>
					    </div>
					    <div class="form-group col-xs-2">
					    <label for="selecionaQntQuarto">Quarto: </label>
					      <select name="select" id="selecionaQntQuarto" class="form-control">
		                    <option value="qntQuarto-1">1</option>
		                    <option value="qntQuarto-2">2</option>
		                    <option value="qntQuarto-3">3</option>
		                    <option value="qntQuarto-4">4</option>
		                    <option value="qntQuarto-5">5</option>
		                  </select>
					  </div>
					  <div class="form-group col-xs-2">
					    <label for="selecionaqntGaragem">Garagem: </label>
					    <select name="select" id="selecionaqntGaragem" class="form-control">
		                    <option value="qntGaragem-1">1</option>
		                    <option value="qntGaragem-2">2</option>
		                    <option value="qntGaragem-3">3</option>
		                    <option value="qntGaragem-4">4</option>
		                </select>
					  </div>
					  <div class="form-group col-xs-3">
					    	<label for="cOutros">Outros: </label>
                 		 	<input type="text" class="form-control" id="cOutros" name="tOutros">
					  </div>
				</form>

				</div>
			</div>
			<!--FOTOS DETALHADAS-->
			<div class="row" id="fotos-detalhes">
				<!--DESCRIÇÃO DO IMOVEL-->
				<div class="col-xs-12" id="descricao-principal">
					<h2>Lorem ipsum do imóvel</h2>
					<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tenetur et quibusdam, ab perspiciatis earum, cum enim rem velit autem veritatis necessitatibus repellat minima mollitia at dolores praesentium iure fugiat.</h4>
				</div>
				<!--FOTO selecionada-->

				<div class="col-xs-7"  style="background: #ccc; margin: 5px;">
					<div class="fotorama"data-nav="thumbs">
					  <a href="/img/1.jpg"><img src="/img/1.jpg"></a>
					  <a href="/img/2.jpg"><img src="/img/2.jpg"></a>
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
			<div class="row" id="foto-exebicao">
					<div class="col-xs-12" >
						<h1>FOTOS PARA EXIBIR</h1>
					</div>
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

			<!--slide imovel-->
			<div class="row">
				<div class="col-xs-12" style="background: #ccc; margin: 5px 15px; height: 80px;">
					<h1>SLIDE DE IMOVEL</h1>
				</div>
			</div>
	</div><!--Fim do detalhes imoveis-->
</div>
<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/footer.php" ?>