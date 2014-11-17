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
  $("#selecionaImovel").on('change',function(){
  	
    if ($("#selecionaImovel").val() == "loteamento" || $("#selecionaImovel").val() == "terrenosUrbanos" || $("#selecionaImovel").val() == "terrenosRurais"  ){
    	$(".a").css("display", "none");
    	$(".o").css("display", "block");
    }
    else{
    	$(".a").css("display", "block");
    	$(".o").css("display", "none");
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
					      <select name="select" id="selecionaImovel" class="form-control">
		                    <option value="areas-portuarias">Áreas Portuárias</option>
		                    <optgroup label="Casas">
		                    <option value="casaAluguel">Casas para Aluguar</option>
		                    <option value="casaVenda">Casas a Venda</option>
		                  </optgroup>
		                  <option value="loteamento">Loteamentos</option>
		                  <option value="terrenosUrbanos">Terrenos Urbanos</option>
		                  <option value="terrenosRurais">Terrenos Rurais</option>
		                  </select>
					    </div>
					  <div class="form-group col-xs-4 o"> <!-- INCLUIR O CAMPO QUE COMEÇA OCULTO, COM A CLASSE "o"-->
					    	<label for="area">Área </label>
                 		 	<input type="text" class="form-control" id="area" name="tOutros">
					  </div>
					    <div class="form-group col-xs-4 a"> <!-- INCLUIR A CLASSE "a", que força o tipo block-->
					    <label for="selecionaQntQuarto">Quarto: </label>
					      <select name="select" id="selecionaQntQuarto" class="form-control">
		                    <option value="qntQuarto-1">1</option>
		                    <option value="qntQuarto-2">2</option>
		                    <option value="qntQuarto-3">3</option>
		                    <option value="qntQuarto-4">4</option>
		                    <option value="qntQuarto-5">5</option>
		                  </select>
					  </div>
					  <div class="form-group col-xs-4 o"> <!-- INCLUIR O CAMPO QUE COMEÇA OCULTO, COM A CLASSE "o"-->
					    	<label for="comprimento">Comprimento </label> 
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
					    </select>
					  </div>
					  <div class="form-group col-xs-4 o"> <!-- INCLUIR O CAMPO QUE COMEÇA OCULTO, COM A CLASSE "o"-->
					    	<label for="largura">Largura </label>
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
		                </select>
					  </div>
					  <div class="form-group col-xs-4">
					    <label for="selecionaBairro">Bairro: </label>
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
					  <div class="form-group col-xs-2">
					    	<label for="cOutros">Referência: </label>
                 		 	<input type="text" class="form-control" id="cOutros" name="tOutros">
					  </div>
					<div class="form-group col-xs-1">
						<button type="button" name="tBuscar" id="cBuscar" class="btn btn-info">Buscar</button>
					</div>
				</form>

				</div>
			</div><!--FILTRO-->

			</body>
			</html>
