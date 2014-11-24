<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/templete.css">
		<link rel="stylesheet" type="text/css" href="/css/home-index.css">
<script src="/js/jquery-1.11.0.js"></script>

<!--script que muda a visibilidade dos campos após escolha..-->
<script type="text/javascript">
	$(document).ready(function(){
		$("#selecionaImovel").on("change", function(){
			if ($("#selecionaImovel").val() == "areas-portuarias" || $("#selecionaImovel").val() == "loteamento" || $("#selecionaImovel").val() == "terrenosUrbanos" || $("#selecionaImovel").val() == "terrenosRurais"  ){
		    	$(".a").css("display", "none");
		    	$(".o").css("display", "block");
		    }
		    else{
		    	$(".a").css("display", "block");
		    	$(".o").css("display", "none");
		    }
		});
		$("#cReferencia").on("change", function(){
			if ($("#cReferencia").val() != "" ){
				$("#filtro-detalhe select").attr("disabled", "disabled");
				$("#filtro-detalhe input:not(#cReferencia)").attr("disabled", "disabled");

			}
			else{
				$("#filtro-detalhe select").removeAttr("disabled");
				$("#filtro-detalhe input").removeAttr("disabled");
			}

		});

		
	});


</script><!--fim do script -->
</head>
<body>
		<div class="row" id="filtro-detalhe">
				<div class="col-xs-12" style="padding-top: 8px;">			
				<form action="" role="form" class="form">
					  
					  <div class="form-group col-xs-4">
					      <label for="selecionaImovel">Imóvel: </label>
<<<<<<< HEAD
					      <select name="selecionaImovel" id="selecionaImovel" class="form-control itemPesquisa">
					      	  <option value="CASA A VENDA">Casas a Venda</option>
			                  <option value="CASA PARA ALUGAR">Casas para Aluguar</option>
			            	  <option value="AREAS PORTUARIA">Áreas Portuárias</option>
			                  <option value="LOTEAMENTO">Loteamentos</option>
			                  <option value="TERRENO URBANO">Terrenos Urbanos</option>
			                  <option value="TERRENO RURAL">Terrenos Rurais</option>
=======
					      <select name="select" id="selecionaImovel" class="form-control">
			                  <option value="casaAluguel">Casas para Aluguar</option>
			                  <option value="casaVenda">Casas a Venda</option>
			            	  <option value="areas-portuarias">Áreas Portuárias</option>
			                  <option value="loteamento">Loteamentos</option>
			                  <option value="terrenosUrbanos">Terrenos Urbanos</option>
			                  <option value="terrenosRurais">Terrenos Rurais</option>
>>>>>>> parent of 79b8e11... pag de pesquisa
		                  </select>
					    </div>
					   <div class="form-group col-xs-4 o"> <!-- INCLUIR O CAMPO QUE COMEÇA OCULTO, COM A CLASSE "o"-->
					    	<label for="area">Área </label>
<<<<<<< HEAD
                 		 	<input type="text" class="form-control itemPesquisa" id="area" name="area">
					  </div>
					    <div class="form-group col-xs-4 a"> <!-- INCLUIR A CLASSE "a", que força o tipo block-->
					    <label for="selecionaQntQuarto">Quarto: </label>
					      <select name="selecionaQntQuarto" id="selecionaQntQuarto" class="itemPesquisa form-control">
=======
                 		 	<input type="text" class="form-control" id="area" name="tOutros">
					  </div>
					    <div class="form-group col-xs-4 a"> <!-- INCLUIR A CLASSE "a", que força o tipo block-->
					    <label for="selecionaQntQuarto">Quarto: </label>
					      <select name="select" id="selecionaQntQuarto" class="form-control">
>>>>>>> parent of 79b8e11... pag de pesquisa
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="mais de 5">mais de 5</option>
		                  </select>
					  </div>
					  <div class="form-group col-xs-4 o"> <!-- INCLUIR O CAMPO QUE COMEÇA OCULTO, COM A CLASSE "o"-->
					    	<label for="comprimento">Comprimento </label> 
<<<<<<< HEAD
                 		 	<input type="text" class="form-control itemPesquisa" id="comprimento" name="comprimento">
					  </div>
					  <div class="form-group col-xs-4 a"> <!-- INCLUIR A CLASSE "a", que força o tipo block-->
					    <label for="selecionaQntSuites">Suite: </label>
					    <select name="selecionaQntSuites" id="selecionaQntSuites" class="itemPesquisa form-control">
					    		<option value="0">0</option>
					            <option value="1">1</option>
					            <option value="2">2</option>
					            <option value="3">3</option>
					            <option value="4">4</option>
					            <option value="5">5</option>
					            <option value="+">mais de 5</option>
=======
                 		 	<input type="text" class="form-control" id="comprimento" name="tOutros">
					  </div>
					  <div class="form-group col-xs-4 a"> <!-- INCLUIR A CLASSE "a", que força o tipo block-->
					    <label for="selecionaQntSuites">Suite: </label>
					    <select name="select" id="selecionaQntSuites" class="form-control">
					            <option value="qntSuite-1">1</option>
					            <option value="qntSuite-2">2</option>
					            <option value="qntSuite-3">3</option>
					            <option value="qntSuite-4">4</option>
					            <option value="qntSuite-5">5</option>
					            <option value="mais de 5">mais de 5</option>
>>>>>>> parent of 79b8e11... pag de pesquisa
					    </select>
					  </div>
					  <div class="form-group col-xs-4 o"> <!-- INCLUIR O CAMPO QUE COMEÇA OCULTO, COM A CLASSE "o"-->
					    	<label for="largura">Largura </label>
<<<<<<< HEAD
                 		 	<input type="text" class="form-control itemPesquisa" id="largura" name="largura">
					  </div>
					  <div class="form-group col-xs-4 a"> <!-- INCLUIR A CLASSE "a", que força o tipo block-->
					    <label for="selecionaqntGaragem">Garagem: </label>
					    <select name="selecionaqntGaragem" id="selecionaqntGaragem" class="itemPesquisa form-control">
		                    <option value="0">0</option>
		                    <option selected value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="+">mais de 5</option>
=======
                 		 	<input type="text" class="form-control" id="largura" name="tOutros">
					  </div>
					  <div class="form-group col-xs-4 a"> <!-- INCLUIR A CLASSE "a", que força o tipo block-->
					    <label for="selecionaqntGaragem">Garagem: </label>
					    <select name="select" id="selecionaqntGaragem" class="form-control">
		                    <option value="qntGaragem-1">1</option>
		                    <option value="qntGaragem-2">2</option>
		                    <option value="qntGaragem-3">3</option>
		                    <option value="qntGaragem-4">4</option>
		                    <option value="qntGaragem-5">5</option>
		                    <option value="mais de 5">mais de 5</option>
>>>>>>> parent of 79b8e11... pag de pesquisa
		                </select>
					  </div>
					  <div class="form-group col-xs-4">
					    <label for="selecionaBairro">Bairro: </label>
<<<<<<< HEAD
					    <select name="selecionaBairro" id="selecionaBairro" class="itemPesquisa form-control">
		                    	<option value="qualquer" selected>Qualquer Bairro</option>
		                    	<option value="BELA VISTA">Bela Vista</option>
			                    <option value="BOA ESPERANÇA">Boa Esperança</option>
			                    <option value="BOM JARDIM">Bom Jardim</option>
			                    <option value="BOM REMÉDIO">Bom Remédio</option>
			                    <option value="CENTRO">Centro</option>
			                    <option value="FLORESTA">Floresta</option>
			                    <option value="JARDIM AEROPORTO">Jardim Aeroporto</option>
			                    <option value="JARDIM AMÉRICA">Jardim América</option>
			                    <option value="JARDIM DAS ARARAS">Jardim das Araras</option>
			                    <option value="JARDIM TAPAJÓS'">Jardim Tapajós</option>
			                    <option value="LIBERDADE">Liberdade</option>
			                    <option value="MARIA MADALENA">Maria Madalena</option>
			                    <option value="NOVA ITAITUBA">Nova Itaituba</option>
			                    <option value="NOVO PARAÍSO">Novo Paraíso</option>
			                    <option value="PERPÉTUO SOCORRO">Perpétuo Socorro</option>
			                    <option value="PIRACANÃ">Piracanã</option>
			                    <option value="RESIDENCIAL VALE DO PIRACANÃ">Residencial Vale do Piracanã</option>
			                    <option value="RESIDENCIAL VIVA ITAITUBA">Residencial Viva Itaituba</option>
			                    <option value="RESIDENCIAL WIRLAND FREIRE">Residencial Wirland Freire</option>	
			                    <option value="SANTO ANTÔNIO">Santo Antônio</option>	
			                    <option value="SÃO FRANCISCO">São Francisco</option>	
			                    <option value="SÃO JOSÉ">São José</option>	
			                    <option value="VALE DO TAPAJÓS">Vale do Tapajós</option>	
			                    <option value="VALMIRLÂNDIA">Valmirlândia</option>	
			                    <option value="VITÓRIA-RÉGIA">Vitória-Régia</option>
=======
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
>>>>>>> parent of 79b8e11... pag de pesquisa
		                </select>
					  </div>
					  <div class="form-group col-xs-2">
					    	<label for="cReferencia">Referência: </label>
                 		 	<input type="text" class="form-control" id="cReferencia" name="tOutros">
					  </div>
					<div class="form-group col-xs-1">
						<button type="submit" name="tBuscar" id="cBuscar" class="btn btn-info">Buscar</button>
					</div>
				</form>

				</div>
			</div><!--FILTRO-->

			</body>
			</html>
