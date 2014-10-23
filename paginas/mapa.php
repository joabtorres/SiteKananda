<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/header.php" ?>
	<link rel="stylesheet" href="/css/mapa.css">
	<!--CONTATO-->
	<div class="row" id="mapa">
		<div class="col-xs-12">
			<img data-src="holder.js/960x600" alt="">
			<!--filtro mapa-->
			<div class="row" id="filtro-mapa">
				<div class="col-xs-12">
					<form action="" role="form">
						<div class="form-group col-xs-12" id="form-1">
							<div class="checkbox">
							    <label for="cVenda">
							      <input type="checkbox" name="tVenda" id="cVenda" value="aVenda"> A Venda
							    </label>
							    <label label="cAluguel">
							      <input type="checkbox" name="tAluguel" id="cAluguel" value="aAluguel"> Aluguel
							    </label>
							    <label label="cTerrenosUrbanos">
							      <input type="checkbox" name="tTerrenosUrbanos" id="cTerrenosUrbanos" value="aTerrenosUrbanos"> Terrenos Urbanos
							    </label>
							    <label label="cTerrenosRuarais">
							      <input type="checkbox" name="tTerrenosRuarais" id="cTerrenosRuarais" value="aTerrenosRuarais"> Terrenos Ruarais
							    </label>
							    <label label="cLoteamento">
							      <input type="checkbox" name="tLoteamento" id="cLoteamento" value="aLoteamento"> Loteamento
							    </label>
							</div>
						</div>
						<div class="form-group col-xs-12" id="form-2">
							<label for="cBairro" class="col-xs-1 col-xs-offset-1 control-label">Bairro:</label>
							<div class="col-xs-6">
								<select name="select" id="selecionaBairro" class="form-control">
				                    <option value="bairroBomRemedio">Bom Remédio</option>
				                    <option value="bairroBoaEsperanca">Boa Esperança</option>
				                    <option value="bairroBelaVista">Bela Vista</option>
				                    <option value="bairroBomJardim">Bom Jardim</option>
				                    <option value="bairroBomCentro">Centro</option>
				                    <option value="bairroFloresta">Floresta</option>
				                    <option value="bairroJardimTapajos">Jardim Tapajós</option>
				                    <option value="bairroJardimAeroporto">Jardim Aeroporto</option>
				                    <option value="bairroJardimAmerica">Jardim América</option>
				                    <option value="bairroJardimDasAraras">Jardim das Araras</option>
				                    <option value="bairroLiberdade">Liberdade</option>
				                    <option value="bairroMariaMadalena">Maria Madalena</option>
				                    <option value="bairroNovaItaituba">Nova Itaituba</option>
				                    <option value="bairroNovoParaiso">Novo Paraíso</option>
				                    <option value="bairroPerpetuoSocorro">Perpétuo Socorro</option>
				                    <option value="bairroPiracana">Piracanã</option>
				                    <option value="bairroPiracana">Residencial Vale do Piracanã</option>
				                    <option value="bairroResidencialVivaItaituba">Residencial Viva Itaituba</option>
				                    <option value="bairroResidencialWirlandFreire">Residencial Wirland Freire</option>	
				                    <option value="bairroSantoAntônio">Santo Antônio</option>	
				                    <option value="bairroSãoFrancisco">São Francisco</option>	
				                    <option value="bairroSãoJose">São José</option>	
				                    <option value="bairroValeTapajos">Vale do Tapajós</option>	
				                    <option value="bairroValmirlândia">Valmirlândia</option>	
				                    <option value="bairroVitoriaRegia">Vitória-Régia</option>	
				                </select>
							</div>
							<div class="form-group col-xs-4">
								<button type="submit" name="tBuscar" id="cBuscar" class="btn btn-info">Buscar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/footer.php" ?>