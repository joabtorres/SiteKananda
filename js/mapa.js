var map;
var idInfoBoxAberto;
var infoBox = [];
var markers = [];
var marcadores = [];
var visibles = [];
var visibles_bairros = [];

function initialize() {	
	var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
	
    var options = {
        zoom: 5,
		center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("mapa"), options);
}

initialize();

function abrirInfoBox(id, marker) {
	if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
		infoBox[idInfoBoxAberto].close();
	}

	infoBox[id].open(map, marker);
	idInfoBoxAberto = id;
}

function carregarPontos() {
	
	$.getJSON('js/pontos.json', function(pontos) {
		
		var latlngbounds = new google.maps.LatLngBounds();
		
		$.each(pontos, function(index, ponto) {
			var ico;

			if(ponto.tipo_imovel=='CASA A VENDA')
				ico = 'img/casa_venda.png'
			else if(ponto.tipo_imovel=='CASA PARA ALUGAR')
				ico = 'img/casa_aluguel.png'
			else if(ponto.tipo_imovel=='TERRENO URBANO')
				ico = 'img/marcador5.png'
			else if(ponto.tipo_imovel=='TERRENO RURAL')
				ico = 'img/marcador5.png'
			else if(ponto.tipo_imovel=='AREAS PORTUARIA')
				ico = 'img/marcador5.png'
			else
				ico = 'img/marcador5.png'

			var marcador = new google.maps.Marker({
				position: new google.maps.LatLng(ponto.latitude, ponto.longitude),
				title: "KANANDA IMOBILIÁRIA - IMÓVEL",
				icon: ico,
				tipo_imovel: ponto.tipo_imovel,
				bairro: ponto.bairro
			});
			marcadores.push(marcador);
			var myOptions = {
				content: "<img src='"+ponto.foto+"' class='foto_mapa'/><p>" + ponto.descricao + "<a href='"+ponto.link+"' class='link_mapa'> Veja</a></p>",
				pixelOffset: new google.maps.Size(-150, 0)
        	};

			infoBox[ponto.id] = new InfoBox(myOptions);
			infoBox[ponto.id].marker = marcador;
			
			infoBox[ponto.id].listener = google.maps.event.addListener(marcador, 'click', function (e) {
				abrirInfoBox(ponto.id, marcador);
			});
			
			markers.push(marcador);
			
			latlngbounds.extend(marcador.position);
			
		});
		
		var markerCluster = new MarkerClusterer(map, markers);
		
		map.fitBounds(latlngbounds);
		
	});
	
}

function ocultar_marcadores(){

   for (var i = 0, length = marcadores.length; i < length; i++){
      	marcadores[i].setVisible(visibles.indexOf(marcadores[i].tipo_imovel) !== -1);
   }
}

function ocultar_bairros(){

   for (var i = 0, length = marcadores.length; i < length; i++){
      	marcadores[i].setVisible(visibles_bairros.indexOf(marcadores[i].bairro) !== -1);
   }
}

function aplica_filtro(obj){

  	var $this = $(obj),
  	valor = $this.attr('id');
  	
	switch(valor) {
	    case 'venda':
	        visibles = ['CASA A VENDA'];
	        break;
	    case 'aluguel':
	        visibles = ['CASA PARA ALUGAR'];
	        break;
	    case 'terrenos_rurais':
	        visibles = ['TERRENO RURAL'];
	        break;
	    case 'terrenos_urbanos':
	        visibles = ['TERRENO URBANO'];
	        break;
	    case 'areas_portuarias':
	        visibles = ['AREAS PORTUARIA'];
	        break;
	    default:
	        visibles = ['LOTEAMENTO'];
	} 

   ocultar_marcadores();

}

function aplica_filtro_bairro(obj){

  	var $this = $(obj),
  	valor =  $this.find(":selected").val();;
  		
	visibles_bairros = [valor];	

   	ocultar_bairros();

}


carregarPontos();