 <?php

$tabela_local = "produto";
$mensagem_sucesso =  false;
$mensagem_erro =  false;


	//Verifica se existe uma ação
		if(isset($pagina_admin[1])):
			
			//verifica qual é a ação a ser tomada
			if($pagina_admin[1] == "novo"):

				$tabela = new Objeto($tabela_local);
				$tabela2 = new Objeto('foto_produto');
				
				if(isset($_POST['acao'])){
					if($_POST['acao'] == "salvar"){

						$tabela->setValor('referencia',$_POST['referencia']);
						$tabela->setValor('tipo_imovel',$_POST['tipo_imovel']);
						$tabela->setValor('finalidade',$_POST['finalidade']);
						$tabela->setValor('quartos',$_POST['quartos']);
						$tabela->setValor('garagem',$_POST['garagem']);
						$tabela->setValor('area_edi',$_POST['area_edificada']);
						$tabela->setValor('area_ter',$_POST['area_terreno']);
						$tabela->setValor('perimetro_l',$_POST['largura']);
						$tabela->setValor('perimetro_c',$_POST['comprimento']);
						$tabela->setValor('latitude',$_POST['latitude']);
						$tabela->setValor('longitude',$_POST['longitude']);
						$tabela->setValor('suites',$_POST['suites']);
						$tabela->setValor('banheiros',$_POST['banheiros']);
						$tabela->setValor('categoria',$_POST['categoria']);
						$tabela->setValor('logradouro',$_POST['logradouro']);
						$tabela->setValor('num',$_POST['numero']);
						$tabela->setValor('complemento',$_POST['complemento']);
						$tabela->setValor('bairro',$_POST['bairro']);
						$tabela->setValor('cidade',$_POST['cidade']);
						$tabela->setValor('descricao',$_POST['descricao']);
						$tabela->setValor('video',$_POST['video']);
						
						if($tabela->inserir() != false){
							$diretorio = "img/imoveis/".$tabela->getId()."-".$_POST['referencia'];
							mkdir('../'.$diretorio, 0644);
							$tabela->limparDados();
							$tabela->addConsulta('id',$tabela->getId());
							$tabela->setValor('diretorio',$diretorio);

							if($tabela->atualizar()){

								$upload = new Upload("../img/imoveis/".$tabela->getId()."-".$_POST['referencia']);
								
								for ($i=1; $i <= $_POST['qtd_fotos']; $i++) { 
									
									if(isset($_FILES['foto'.$i])){
										
										$upload->addFile($_FILES['foto'.$i],array("jpg","png","gif"),NULL,1);
										$file = $upload->retornaFiles(true);
										

										$tabela2->setValor('id_produto', $tabela->getId());
										$tabela2->setValor('arquivo',substr($file[0],3));
										
										if($tabela2->inserir() != false){
											cria_json();
											$mensagem_sucesso = true;
											$mensagem_erro = false;
										}else{
											$mensagem_sucesso = false;
											$mensagem_erro = true;
										}

										$tabela2->limparDados();

									}
								}
							}	
						}
					}

					if($mensagem_sucesso){
						header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/sucess');
					}
				}

				
?>
	<form enctype="multipart/form-data" id="novo-administrador" action="<?= RAIZ.'admin/'.implode('/',$pagina_admin); ?>" method="post" autocomplete="off">
		<input type="hidden" name="acao" value="salvar" />
		<ul>

			<?php
				if($mensagem_erro){ ?>
					<li><div class='mensagem_erro'>Ocorreu um erro!</div></li>
				<?php }
			?>

			<li>
				<label>Referência</label><input obg="Referência" name="referencia" type="text" />
				<div class="clear"></div>
			</li>

			<li>
				<label>Tipo do Imóvel</label><select obg="Tipo do Imóvel" name="tipo_imovel"><?= Funcao::gerarArraySelectOptions(array('CASA A VENDA', 'CASA PARA ALUGAR', 'TERRENO URBANO','TERRENO RURAL','AREAS PORTUARIA','LOTEAMENTO'))?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Categoria</label><select obg="Categoria do Imóvel" name="categoria"><?= Funcao::gerarArraySelectOptions(array('CASA TERREA', 'SOBRADO','APARTAMENTO','TERRENO'))?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Finalidade</label><select obg="Finalidade" name="finalidade"><?= Funcao::gerarArraySelectOptions(array('VENDA', 'ALUGUEL' ))?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Quartos</label><input obg="Quantidade de Quatos" name="quartos" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Banheiros</label><input obg="Quantidade de Banheiros" name="banheiros" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Suítes</label><input obg="Quantidade de Suítes" name="suites" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Vagas na Garagem</label><input obg="Vagas na Garagem" name="garagem" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Logradouro</label><input name="logradouro" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Número</label><input obg="Número do Imóvel" name="numero" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Complemento</label><input name="complemento" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Bairro</label><select obg="Bairro" name="bairro"><?= Funcao::gerarArraySelectOptions(array('BELA VISTA', 'BOA ESPERANÇA','BOM JARDIM', 'BOM REMÉDIO', 'CENTRO', 'FLORESTA', 'JARDIM AEROPORTO', 'JARDIM AMÉRICA', 'JARDIM DAS ARARAS', 'JARDIM TAPAJÓS', 'LIBERDADE', 'MARIA MADALENA', 'NOVA ITAITUBA', 'NOVO PARAÍSO', 'PERPÉTUO SOCORRO', 'PIRACANÃ', 'RESIDENCIAL VALE DO PIRACANÃ', 'RESIDENCIAL VIVA ITAITUBA' , 'RESIDENCIAL WIRLAND FREIRE', 'SANTO ANTÔNIO', 'SÃO FRANCISCO', 'SÃO JOSÉ', 'VALE DO TAPAJÓS', 'VALMIRLÂNDIA', 'VITÓRIA-RÉGIA'))?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Cidade</label><select obg="Cidade" name="cidade"><?= Funcao::gerarArraySelectOptions(array('ITAITUBA' ))?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Uf</label><select obg="Estado" name="uf"><?= Funcao::gerarArraySelectOptions(array('PA' ))?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Área Edificada</label><input obg="Área edificada" class='area' name="area_edificada" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Área do Terreno</label><input obg="Área do Terreno" class='area' name="area_terreno" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Largura</label><input obg="Largura" name="largura" class='metros_medida' type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Comprimento</label><input obg="Comprimento" class='metros_medida' name="comprimento" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Video</label><input name="video" type='text'>
				<div class="clear"></div>
			</li>

			<li>
				<label>Descrição</label><textarea obg="Descrição do imóvel" name="descricao"></textarea>
				<div class="clear"></div>
			</li>

			<li>
				<fieldset>
					<legend>Mapa</legend>

					<label>Latitude</label><input name="latitude" type='text'>
					<div class="clear"></div>
			
					<label>Longitude</label><input name="longitude" type='text'>
					<div class="clear"></div>

					<div id="mapa" style="height: 500px; width: 700px;border: solid 1px">
						<!-- Maps API Javascript -->
				        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCg1ogHawJGuDbw7nd6qBz9yYxYPoGTWQo&sensor=false"></script>
        			</div>
			
				</fieldset>
			</li>

			<li>
				<fieldset>
					<legend>Fotos</legend>
					<input type="hidden" name="qtd_fotos" value="1" id="qtd_fotos"/>
					<a href='#' onclick='add_slide();'>Adicionar Foto</a>
					
					<div id='fotos'>
						<div class='foto' id='foto1'>

							<label>Foto</label><input obg="foto1" name="foto1" type="file" onchange="readURL(this);" /><img id='preview1' src='#' class='preview_foto'/>

							<a href='#' onclick="remover_foto(this);">Remover</a>

						</div>
					</div>

				</fieldset>
			</li>

			<li>
				<input type="submit" value="Salvar" />
				<button onclick="location='<?= RAIZ.'admin/'.$pagina_admin[0] ?>'; return false;">Cancelar</button>
			</li>

		</ul>
		
	</form>
<?php
			elseif($pagina_admin[1] == "editar" and is_numeric($pagina_admin[2])):
				
				$tabela = new Objeto($tabela_local);
				$tabela->addConsulta('id',$pagina_admin[2]);
				

				$tabela2 = new Objeto('foto_produto');
				
				
				if(isset($_POST['acao'])){
					if($_POST['acao'] == "salvar"){

						$tabela->setValor('referencia',$_POST['referencia']);
						$tabela->setValor('tipo_imovel',$_POST['tipo_imovel']);
						$tabela->setValor('finalidade',$_POST['finalidade']);
						$tabela->setValor('quartos',$_POST['quartos']);
						$tabela->setValor('garagem',$_POST['garagem']);
						$tabela->setValor('area_edi',$_POST['area_edificada']);
						$tabela->setValor('area_ter',$_POST['area_terreno']);
						$tabela->setValor('perimetro_l',$_POST['largura']);
						$tabela->setValor('perimetro_c',$_POST['comprimento']);
						$tabela->setValor('latitude',$_POST['latitude']);
						$tabela->setValor('longitude',$_POST['longitude']);
						$tabela->setValor('suites',$_POST['suites']);
						$tabela->setValor('banheiros',$_POST['banheiros']);
						$tabela->setValor('categoria',$_POST['categoria']);
						$tabela->setValor('logradouro',$_POST['logradouro']);
						$tabela->setValor('num',$_POST['numero']);
						$tabela->setValor('complemento',$_POST['complemento']);
						$tabela->setValor('bairro',$_POST['bairro']);
						$tabela->setValor('cidade',$_POST['cidade']);
						$tabela->setValor('descricao',$_POST['descricao']);
						$tabela->setValor('video',$_POST['video']);
						
						
						if($tabela->atualizar() != false){
						
							$tabela->limparDados();
							$tabela->addConsulta('id',$pagina_admin[2]);
							$tabela->selecionarTudo();
							$imovel = $tabela->retornar();
							
							$upload = new Upload("../".$imovel['diretorio']);

							############## CONSULTA FOTOS NO BD ###############
							$tabela2->addConsulta('id_produto', $imovel['id']);
							$tabela2->selecionarTudo();
							$array_fotos = array();// fotos do evento no banco
							$i=0;
							foreach ($tabela2->retornarDados() as $key => $value) {
								$array_fotos[$i] = $value['id'];
								$i++;
							}
							
							$qtd_array_fotos = count($array_fotos);
							$tabela2->limparDados();

							###################################################
							
							for ($i=1; $i <= $_POST['qtd_fotos']; $i++) {//verifica cada foto enviada
								
								if(isset($_FILES['foto'.$i])){// verifica se existem fotos para serem atualizadas
									
									$upload->addFile($_FILES['foto'.$i],array("jpg","png","gif"),NULL,1);
									$file = $upload->retornaFiles(true);
									
									if(isset($_POST['id_foto'.$i])){// verifica se foto a ser atualizada	

										$tabela2->addConsulta('id',$_POST['id_foto'.$i]);
										$tabela2->selecionarTudo();
										$img = $tabela2->retornar();

										if(substr($file[0],3)==''){
											
											$tabela2->setValor('arquivo',$img['arquivo']);
										
										}else{
											
											$tabela2->setValor('arquivo',substr($file[0],3));	
											$img_apagar = $img['arquivo'];

										}


										for($j = 0 ; $j < $qtd_array_fotos; $j++) {// excluir a foto do array de exclusão
											if(array_key_exists($j, $array_fotos)){
												if($array_fotos[$j] == $_POST['id_foto'.$i])
													unset($array_fotos[$j]);
											}
										}

										$tabela2->addConsulta('id',$_POST['id_foto'.$i]);
										
										if($tabela2->atualizar() != false){
											if(isset($img_apagar)){// apaga a imagem antiga
												if($img_apagar != ''){
													if(file_exists('../'.$img['arquivo']))
														unlink('../'.$img['arquivo']);
												}
											}
											
											cria_json();
											$mensagem_sucesso = true;
											$mensagem_erro = false;
										}else{
											$mensagem_sucesso = false;
											$mensagem_erro = true;
										}

										$img_apagar = '';
									}else{// insere uma nova foto

										$tabela2->setValor('id_produto', $imovel['id']);
										$tabela2->setValor('arquivo',substr($file[0],3));
																			
										if($tabela2->inserir() != false){

											cria_json();
											$mensagem_sucesso = true;
											$mensagem_erro = false;
										}else{
											$mensagem_sucesso = false;
											$mensagem_erro = true;
										}
									}
									

									$tabela2->limparDados();

								}
							}	

							// caso haja fotos para serem removidas do banco
							if(count($array_fotos) > 0 ){
								foreach ($array_fotos as $key => $value) {
									$tabela2->addConsulta('id',$value);
									$tabela2->selecionarTudo();
									$img = $tabela2->retornar();

									if(unlink('../'.$img['arquivo'])){
										if($tabela2->deletar() != false){
											cria_json();
											$mensagem_sucesso = true;
											$mensagem_erro = false;
										}
									}else{
										$mensagem_sucesso = false;
										$mensagem_erro = true;
									}
									
								}
								$tabela2->limparDados();

							}

						}else{
							$mensagem_sucesso = false;
							$mensagem_erro = true;
						}

					}


					if($mensagem_sucesso)
						header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/sucess');

				}

				
				$tabela->selecionarTudo();
				$imovel = $tabela->retornar();
				$tabela2->addConsulta('id_produto',$imovel['id']);
				$tabela2->addExtras('ORDER BY id DESC');
				$tabela2->selecionarTudo();
				$fotos = $tabela2->retornarDados();
			
?>
<form enctype="multipart/form-data" id="novo-administrador" action="<?= RAIZ.'admin/'.implode('/',$pagina_admin); ?>" method="post" autocomplete="off">
		<input type="hidden" name="acao" value="salvar" />
		<ul>

			<?php
				if($mensagem_erro){ ?>
					<li><div class='mensagem_erro'>Ocorreu um erro!</div></li>
				<?php }
			?>

			<li>
				<label>Referência</label><input obg="Referência" name="referencia" type="text" value="<?= $imovel['referencia']?>"/>
				<div class="clear"></div>
			</li>

			<li>
				<label>Tipo do Imóvel</label><select obg="Tipo do Imóvel" name="tipo_imovel"><?= Funcao::gerarArraySelectOptions(array('CASA A VENDA', 'CASA PARA ALUGAR', 'TERRENO URBANO','TERRENO RURAL','AREAS PORTUARIA','LOTEAMENTO'), $imovel['tipo_imovel'])?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Categoria</label><select obg="Categoria do Imóvel" name="categoria"><?= Funcao::gerarArraySelectOptions(array('CASA TERREA', 'SOBRADO','APARTAMENTO','TERRENO'), $imovel['categoria'])?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Finalidade</label><select obg="Finalidade" name="finalidade"><?= Funcao::gerarArraySelectOptions(array('VENDA', 'ALUGUEL'), $imovel['finalidade'])?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Quartos</label><input obg="Quantidade de Quatos" name="quartos" type='text' value="<?= $imovel['quartos']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Banheiros</label><input obg="Quantidade de Banheiros" name="banheiros" type='text' value="<?= $imovel['banheiros']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Suítes</label><input obg="Quantidade de Suítes" name="suites" type='text' value="<?= $imovel['suites']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Vagas na Garagem</label><input obg="Vagas na Garagem" name="garagem" type='text' value="<?= $imovel['garagem']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Logradouro</label><input name="logradouro" type='text' value="<?= $imovel['logradouro']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Número</label><input obg="Número do Imóvel" name="numero" type='text' value="<?= $imovel['num']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Complemento</label><input name="complemento" type='text' value="<?= $imovel['complemento']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Bairro</label><select obg="Bairro" name="bairro"><?= Funcao::gerarArraySelectOptions(array('BELA VISTA', 'BOA ESPERANÇA','BOM JARDIM', 'BOM REMÉDIO', 'CENTRO', 'FLORESTA', 'JARDIM AEROPORTO', 'JARDIM AMÉRICA', 'JARDIM DAS ARARAS', 'JARDIM TAPAJÓS', 'LIBERDADE', 'MARIA MADALENA', 'NOVA ITAITUBA', 'NOVO PARAÍSO', 'PERPÉTUO SOCORRO', 'PIRACANÃ', 'RESIDENCIAL VALE DO PIRACANÃ', 'RESIDENCIAL VIVA ITAITUBA' , 'RESIDENCIAL WIRLAND FREIRE', 'SANTO ANTÔNIO', 'SÃO FRANCISCO', 'SÃO JOSÉ', 'VALE DO TAPAJÓS', 'VALMIRLÂNDIA', 'VITÓRIA-RÉGIA' ), $imovel['bairro'])?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Cidade</label><select obg="Cidade" name="cidade"><?= Funcao::gerarArraySelectOptions(array('ITAITUBA' ), $imovel['cidade'])?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Uf</label><select obg="Estado" name="uf"><?= Funcao::gerarArraySelectOptions(array('PA' ), $imovel['uf'])?></select>
				<div class="clear"></div>
			</li>

			<li>
				<label>Área Edificada</label><input obg="Área edificada" class='area' name="area_edificada" type='text' value="<?= $imovel['area_edi']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Área do Terreno</label><input obg="Área do Terreno" class='area' name="area_terreno" type='text' value="<?= $imovel['area_ter']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Largura</label><input obg="Largura" name="largura" class='metros_medida' type='text' value="<?= $imovel['perimetro_l']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Comprimento</label><input obg="Comprimento" name="comprimento" class='metros_medida' type='text' value="<?= $imovel['perimetro_c']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Video</label><input name="video" type='text' value="<?= $imovel['video']?>">
				<div class="clear"></div>
			</li>

			<li>
				<label>Descrição</label><textarea obg="Descrição do imóvel" name="descricao"><?= $imovel['descricao']?></textarea>
				<div class="clear"></div>
			</li>

			<li>
				<fieldset>
					<legend>Mapa</legend>

					<label>Latitude</label><input name="latitude" id='latitude' type='text' value="<?= $imovel['latitude']?>" onchange="addMarker();">
					<div class="clear"></div>
			
					<label>Longitude</label><input name="longitude" id='longitude' type='text' value="<?= $imovel['longitude']?>" onchange="addMarker();">
					<div class="clear"></div>

					<div id="mapa" style="height: 500px; width: 700px;border: solid 1px">
						<!-- Maps API Javascript -->
				        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCg1ogHawJGuDbw7nd6qBz9yYxYPoGTWQo&sensor=false"></script>
        			</div>
			
				</fieldset>
			</li>

			<li>
				<fieldset>
					<legend>Fotos</legend>
					<input type="hidden" name="qtd_fotos" value="<?= $tabela2->getLinhasAfetadas()?>" id="qtd_fotos"/>
					<a href='#' onclick='add_slide();'>Adicionar Foto</a>
					
					<div id='fotos'>
					<?php
						$i=1;
						$destaque = '';
						foreach ($fotos as $key => $foto) {
							if($i == count($fotos))
								$destaque = 'foto_destaque';
							else
								$destaque = '';
					?>

					<div class='foto <?= $destaque ?>' id="foto<?=$i ?>">

						<input type='hidden' name="id_foto<?= $i ?>" value="<?=$foto['id'] ?>"/>

						<label>Foto</label><input name="foto<?=$i ?>" type="file" onchange="readURL(this);" /><img id='preview<?=$i ?>' src='<?= RAIZ.$foto['arquivo'] ?>' class='preview_foto'/>

						<a href='#' onclick="remover_foto(this);">Remover</a>

					</div>

					<?php
						$i++;
					}
					?>
					</div>

				</fieldset>
			</li>

			<li>
				<input type="submit" value="Salvar" />
				<button onclick="location='<?= RAIZ.'admin/'.$pagina_admin[0] ?>'; return false;">Cancelar</button>
			</li>

		</ul>
		
	</form>
<?php

			elseif($pagina_admin[1] == "excluir" and is_numeric($pagina_admin[2])):

				$tabela = new Objeto($tabela_local);
				$tabela->addConsulta('id',$pagina_admin[2]);
				$tabela->selecionarTudo();
				$imovel = $tabela->retornar();

				if($tabela->deletar() != false){
					
					$tabela2 = new Objeto('foto_produto');
					$tabela2->addConsulta('id_produto',$imovel['id']);
					$tabela2->selecionarTudo();
					
					foreach ($tabela2->retornarDados() as $key => $value) {
						unlink('../'.$value['arquivo']);
					}

					if($tabela2->deletar() != false){
						rmdir('../'.$imovel['diretorio']);
						$mensagem_sucesso = true;	
					}

				}else{
					$mensagem_sucesso = false;
				}

				if($mensagem_sucesso)
					header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/sucess');
				else
					header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/error');

			elseif($pagina_admin[1] == "page" and is_numeric($pagina_admin[2])):

				$grid = new Grid($tabela_local);
				$grid->addPaginaAtual($pagina_admin[2]);
				$grid->addColuna('Cod', 'id');
				$grid->addColuna('Referência', 'referencia');
				$grid->addColuna('Tipo de Imóvel', 'tipo_imovel');
				$grid->addColuna('Finalidade', 'finalidade');
				$grid->addColuna('Bairro', 'bairro');
				$grid->addColuna('Data do Cadastro', 'data_cadastro');
				$grid->addItemPesquisa('Referência', 'referencia');
				$grid->addItemPesquisa('Tipo do Imóvel', 'tipo_imovel');
				$grid->addItemPesquisa('Finalidade', 'finalidade');
				$grid->addItemPesquisa('Bairro', 'bairro');
				$grid->addItemPesquisa('Quartos', 'quartos');
				$grid->addItemPesquisa('Garagem', 'garagem');
				$grid->addItemPesquisa('Suíte', 'suites');
				$grid->gerarGrid();

			else:
				
				if($pagina_admin[1] == 'error'):
					echo "<div class='mensagem_erro'>Ocorreu um erro!</div>";
					goto lista;

				elseif ($pagina_admin[1] == 'sucess'):
					echo "<div class='mensagem_sucesso'>Operação realizada com sucesso!</div>";
					goto lista;

				elseif ($pagina_admin[1] == 'search'):

					if(isset($_POST['item_pesquisa']) AND isset($_POST['pesquisa'])):

						$grid = new Grid($tabela_local);
						$grid->addConsulta($_POST['item_pesquisa'], $_POST['pesquisa']);
						$grid->addPaginaAtual($_POST['pagina_pesquisa']);
						$grid->addColuna('Cod', 'id');
						$grid->addColuna('Referência', 'referencia');
						$grid->addColuna('Tipo de Imóvel', 'tipo_imovel');
						$grid->addColuna('Finalidade', 'finalidade');
						$grid->addColuna('Bairro', 'bairro');
						$grid->addColuna('Data do Cadastro', 'data_cadastro');
						$grid->addItemPesquisa('Referência', 'referencia');
						$grid->addItemPesquisa('Tipo do Imóvel', 'tipo_imovel');
						$grid->addItemPesquisa('Finalidade', 'finalidade');
						$grid->addItemPesquisa('Bairro', 'bairro');
						$grid->addItemPesquisa('Quartos', 'quartos');
						$grid->addItemPesquisa('Garagem', 'garagem');
						$grid->addItemPesquisa('Suíte', 'suites');
						$grid->gerarGrid();

					else:

						goto lista;

					endif;

				endif;

			endif; //Fim; verifica qual é a ação a ser tomada

	else:

		lista:

		$grid = new Grid($tabela_local);
		$grid->addColuna('Cod', 'id');
		$grid->addColuna('Referência', 'referencia');
		$grid->addColuna('Tipo de Imóvel', 'tipo_imovel');
		$grid->addColuna('Finalidade', 'finalidade');
		$grid->addColuna('Bairro', 'bairro');
		$grid->addColuna('Data do Cadastro', 'data_cadastro');
		$grid->addItemPesquisa('Referência', 'referencia');
		$grid->addItemPesquisa('Tipo do Imóvel', 'tipo_imovel');
		$grid->addItemPesquisa('Finalidade', 'finalidade');
		$grid->addItemPesquisa('Bairro', 'bairro');
		$grid->addItemPesquisa('Quartos', 'quartos');
		$grid->addItemPesquisa('Garagem', 'garagem');
		$grid->addItemPesquisa('Suíte', 'suites');
		$grid->gerarGrid();
	
	endif;//Fim; Verifica se existe uma ação

	function cria_json(){
		$tabela = new Objeto('produto');
		$tabela2 = new Objeto('foto_produto');	
		$pontos = array();
		$tabela->selecionarTudo();
		$i = 0;

		foreach ($tabela->retornarDados() as $key => $value) {
			$pontos[$i]['id'] = $value['id'];
			$pontos[$i]['latitude'] = $value['latitude'];
			$pontos[$i]['longitude'] = $value['longitude'];
			$pontos[$i]['categoria'] = $value['categoria'];

			$descricao0 = str_split($value['descricao']);
			$descricao1 = '';
			for ($j=0; $j < count($descricao0); $j++) { 
				if($j==81){
					$descricao1 .= '...';
					break;
				}
				$descricao1 .= $descricao0[$j];
			}

			$tabela2->addConsulta('id_produto', $value['id']);
			$tabela2->selecionarTudo();
			$foto = $tabela2->retornar();

			$pontos[$i]['descricao'] = $descricao1;
			$pontos[$i]['foto'] = $foto['arquivo'];
			$i++;
		}

		$pontos = json_encode($pontos);
		
		var_dump($pontos);

		$json = fopen(RAIZSIMPLES."js/pontos.json", "w");
		 
		$escreve = fwrite($json, $pontos);
		 
		fclose($json); 
	}
?>