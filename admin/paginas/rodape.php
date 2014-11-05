

 		</div> <!-- #conteudo-geral -->	
		
		
		<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
		<script type="text/javascript" src="<?= RAIZ ?>js/jquery_2.1.1.min.js"></script>
 		<script type="text/javascript" src="<?= RAIZ ?>admin/js/comportamento.js"></script>
 		<script type="text/javascript" src="<?= RAIZ ?>/js/ui/ui/jquery-ui-1.8.16.custom.js"></script>
		<script type="text/javascript" src="<?= RAIZ ?>/js/ui/ui/jquery.ui.touch-punch.js"></script>
		<script type="text/javascript" src="<?= RAIZ ?>/js/ui/ui/jquery-ui-timepicker.js"></script>
 		<script type="text/javascript" src="<?= RAIZ ?>js/maskedinput.js"type="text/javascript"></script>
 		<script type="text/javascript" src="<?= RAIZ ?>js/priceinput.js"type="text/javascript"></script>
		<script type="text/javascript" src="<?= RAIZ ?>js/Funcoes.js"type="text/javascript"></script>
		<!-- MAPA -->
		<script type="text/javascript" src="<?= RAIZ ?>js/infobox.js"></script>
        <script type="text/javascript" src="<?= RAIZ ?>js/markerclusterer.js"></script>
        <script type="text/javascript" src="<?= RAIZ ?>js/mapa_admin.js"></script>

		<script type="text/javascript">
		$(document).ready(function() {
			//quantidade de fotos na página de eventos
		    var i = $('div.foto').filter(function(idx){
		        return $(this);
		    }).length;
			i++;
			
			add_foto = function ()
			  {
			    
			      
			      var fotos = document.getElementsByClassName('foto');
			      
			      if(fotos.length > 0){
				      conteiner = document.querySelector("#fotos");
				      div = document.createElement('div');
				      div.setAttribute('class', 'foto');
				      div.setAttribute('id', 'foto'+i);
				      label = document.createElement('label');			      
				      label.appendChild(document.createTextNode('Foto'));
				      input = document.createElement('input');
				      input.setAttribute('name','foto'+i);
				      input.setAttribute('type','file');
				      input.setAttribute('onchange','readURL(this);');
				      label2 = document.createElement('label');			      
				      label2.appendChild(document.createTextNode('Descrição da Foto'));
				      textarea = document.createElement('textarea');
				      textarea.setAttribute('obg','Descrição da Foto '+i);
				      textarea.setAttribute('name','descricao_foto'+i);
				      textarea.setAttribute('cols','20');
				      textarea.setAttribute('rows','2');			      
				      img = document.createElement('img');
				      img.setAttribute('id','preview'+i);
				      img.setAttribute('src','#');
				      img.setAttribute('class','preview_foto');
				      a = document.createElement('a');
				      a.setAttribute('href','#');
				      a.setAttribute('onclick','remover_foto(this);');
				      a.appendChild(document.createTextNode('Remover'));
				      div.appendChild(label);
				      div.appendChild(input);
				      div.appendChild(label2);
				      div.appendChild(textarea);
				      div.appendChild(img);
				      div.appendChild(a);
				      conteiner.insertBefore(div, conteiner.firstChild);

			  		}else{

			  			fotos = document.getElementById("fotos");
			      		fotos.innerHTML=fotos.innerHTML+"<div class='foto' id='foto"+i+"'><label>Foto</label><input name='foto"+i+"' type='file' onchange='readURL(this);' /><label>Descrição da Foto</label><textarea obg='Descrição da Foto "+i+"' name='descricao_foto"+i+"' cols='20' rows='2'></textarea><img id='preview"+i+"' scr='#' class='preview_foto'/><a href='#' onclick='remover_foto(this);''>Remover</a></div>";

			  		}

			      	qtd_fotos = document.getElementById("qtd_fotos");
			      	qtd_fotos.value = i;
			     	i++;

			}

			add_slide = function ()
			  {
			    
			      var fotos = document.getElementsByClassName('foto');
			      
			      if(fotos.length > 0){

				      conteiner = document.querySelector("#fotos");
				      div = document.createElement('div');
				      div.setAttribute('class', 'foto');
				      div.setAttribute('id', 'foto'+i);
				      label = document.createElement('label');			      
				      label.appendChild(document.createTextNode('Foto'));
				      input = document.createElement('input');
				      input.setAttribute('name','foto'+i);
				      input.setAttribute('type','file');
				      input.setAttribute('onchange','readURL(this);');
				      img = document.createElement('img');
				      img.setAttribute('id','preview'+i);
				      img.setAttribute('src','#');
				      img.setAttribute('class','preview_foto');
				      a = document.createElement('a');
				      a.setAttribute('href','#');
				      a.setAttribute('onclick','remover_foto(this);');
				      a.appendChild(document.createTextNode('Remover'));
				      div.appendChild(label);
				      div.appendChild(input);
				      div.appendChild(img);
				      div.appendChild(a);
				      conteiner.insertBefore(div, conteiner.firstChild);

					}else{

						fotos = document.getElementById("fotos");
			      		fotos.innerHTML=fotos.innerHTML+"<div class='foto foto_destaque' id='foto"+i+"'><label>Foto</label><input name='foto"+i+"' type='file' onchange='readURL(this);' /><img id='preview"+i+"' scr='#' class='preview_foto'/><a href='#' onclick='remover_foto(this);''>Remover</a></div>";
					}

			      	qtd_fotos = document.getElementById("qtd_fotos");
			      	qtd_fotos.value = i;
			      	i++;

			}

			add_slideshow = function ()
			  {
			    
			      var fotos = document.getElementsByClassName('foto');
			      
			      if(fotos.length > 0){

				      conteiner = document.querySelector("#fotos");
				      div = document.createElement('div');
				      div.setAttribute('class', 'foto');
				      div.setAttribute('id', 'foto'+i);
				      label = document.createElement('label');			      
				      label.appendChild(document.createTextNode('Foto'));
				      input = document.createElement('input');
				      input.setAttribute('name','foto'+i);
				      input.setAttribute('type','file');
				      input.setAttribute('onchange','readURL(this);');
				      img = document.createElement('img');
				      img.setAttribute('id','preview'+i);
				      img.setAttribute('src','#');
				      img.setAttribute('class','preview_foto');
				      titulo  = document.createElement('input');
				      titulo.setAttribute('type', 'text');
				      titulo.setAttribute('name', 'foto'+i);
				      textarea = document.createElement('textarea');
				      textarea.setAttribute('name','descricao'+i);
				      textarea.setAttribute('cols','20');
				      textarea.setAttribute('rows','2');
				      a = document.createElement('a');
				      a.setAttribute('href','#');
				      a.setAttribute('onclick','remover_foto(this);');
				      a.appendChild(document.createTextNode('Remover'));
				      div.appendChild(label);
				      div.appendChild(input);
				      div.appendChild(img);
				      div.appendChild(titulo);
				      div.appendChild(textarea);
				      div.appendChild(a);
				      conteiner.insertBefore(div, conteiner.firstChild);

					}else{

						fotos = document.getElementById("fotos");
			      		fotos.innerHTML=fotos.innerHTML+"<div class='foto foto_destaque' id='foto"+i+"'><label>Foto</label><input name='foto"+i+"' type='file' onchange='readURL(this);' /><img id='preview"+i+"' scr='#' class='preview_foto'/><a href='#' onclick='remover_foto(this);''>Remover</a></div>";
					}

			      	qtd_fotos = document.getElementById("qtd_fotos");
			      	qtd_fotos.value = i;
			      	i++;

			}

			remover_foto = function(obj){

				    var foto = $(obj).parents('.foto').attr('id');
				    $('#'+foto).remove();
				
			}

			readURL = function (input) {

		        if (input.files && input.files[0]) {
		            var reader = new FileReader();
		        	var j = input.name.replace('foto','');
		        	
		            reader.onload = function (e) {
		                  $('#preview'+j).attr('src', e.target.result);
		            }
		            
		            reader.readAsDataURL(input.files[0]);            
		        }
		    }
		});
		</script>

	</body>
</html>