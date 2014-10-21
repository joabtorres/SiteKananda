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
						<div class="form-group col-xs-12" >
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
						<div class="form-group">
							<label for="cCidade" class="col-xs-1 control-label">Cidade:</label>
							<div class="col-xs-4">
								<select name="tCidade" id="cCidade" class="form-control">
				              	<option value="cidadeItaituba">Itaituba</option>
				            </select>
							</div>
						</div>
						<div class="form-group col-xs-6">
							<button type="submit" name="tBuscar" id="cBuscar" class="btn btn-info">Buscar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/footer.php" ?>