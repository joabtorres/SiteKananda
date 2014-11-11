var map;
var idInfoBoxAberto;
var infoBox = [];
var markers = [];
var marcadores = [];
var visibles = ['aluguel','venda'];

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
/*
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
			if(ponto.categoria=='CASA TERREA')
				ico = 'imagens/casa1.png'
			if(ponto.categoria=='APARTAMENTO')
				ico = 'imagens/marcador5.png'
			else
				ico = 'imagens/marcador2.png'

			var marcador = new google.maps.Marker({
				position: new google.maps.LatLng(ponto.latitude, ponto.longitude),
				title: "Meu ponto personalizado! :-D",
				icon: ico,
				categoria: ponto.categoria
			});
			marcadores.push(marcador);
			var myOptions = {
				content: "<img src='"+ponto.foto+"' class='foto_mapa'/><p>" + ponto.descricao + "<a href='#' class='link_mapa'> Veja</a></p>",
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
      	marcadores[i].setVisible(visibles.indexOf(marcadores[i].categoria) !== -1);
   }
}

function aplica_filtro(obj){

              var $this = $(obj),
              valor = $this.attr('id');
              
               if ($this.val() == 'false'){
                  // adiciona o objeto a lista de exibição
                  visibles.push(valor);
                  $this.val('true');
               }
               else {
                  // remove o objeto da lista de exibição
                  visibles.splice(visibles.indexOf(valor), 1);
                  $this.val('false');
               }

               ocultar_marcadores();

            }

carregarPontos();*/