<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/header.php" ?>
<link rel="stylesheet" href="/css/imovel-categoria.css">
<link rel="stylesheet" href="/css/galeria.css">
<!--FOTORAMA-->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="/paginas/galeria/css/fotorama.css" rel="stylesheet">
<script src="/paginas/galeria/js/fotorama.js"></script>
<!---->
<di class="row" >
	<!--FOTO selecionada-->

	<div class="col-xs-12"class id="galeria-show">
		<div class="fotorama" data-nav="thumbs" data-loop="true" data-width="950" data-max-width="" data-allowfullscreen="true">
      <a href="/img/test1.jpg"><img src="/img/test1.jpg"></a>
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>  
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>  
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>
      <a href="/img/residencia-a1.png"><img src="/img/residencia-a11.png"></a>  
		</div>
	</div>
</di>


<!--CATEGORIA DE IMOVEL-->

	<div id="imovel-home">
          <h3 class="imovel-nome">Galeria</h3>
            <div class="row">
                <div class="col-xs-4">
                  <a href="">
                      <div class="home-imovel">
                        <img src="/img/venda-residencia.png" alt="...">
                        <div class="home-legenda-imovel">
                            <p class="class-titulo">Lorem Ipsum</p>
                           <p class="class-data">14 de outubro de 2014</p>
                        </div>
                      </div>
                   </a>
                </div>
                <div class="col-xs-4">
                  <a href="">
                      <div class="home-imovel">
                        <img src="/img/venda-residencia.png" alt="...">
                        <div class="home-legenda-imovel">
                            <p class="class-titulo">Lorem Ipsum</p>
                           <p class="class-data">14 de outubro de 2014</p>
                        </div>
                      </div>
                   </a>
                </div>
                <div class="col-xs-4">
                  <a href="">
                      <div class="home-imovel">
                        <img src="/img/venda-residencia.png" alt="...">
                        <div class="home-legenda-imovel">
                            <p class="class-titulo">Lorem Ipsum</p>
                           <p class="class-data">14 de outubro de 2014</p>
                        </div>
                      </div>
                   </a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-4">
                  <a href="">
                      <div class="home-imovel">
                        <img src="/img/venda-residencia.png" alt="...">
                        <div class="home-legenda-imovel">
                            <p class="class-titulo">Lorem Ipsum</p>
                           <p class="class-data">14 de outubro de 2014</p>
                        </div>
                      </div>
                   </a>
                </div>
                <div class="col-xs-4">
                  <a href="">
                      <div class="home-imovel">
                        <img src="/img/venda-residencia.png" alt="...">
                        <div class="home-legenda-imovel">
                            <p class="class-titulo">Lorem Ipsum</p>
                           <p class="class-data">14 de outubro de 2014</p>
                        </div>
                      </div>
                   </a>
                </div>
                <div class="col-xs-4">
                  <a href="">
                      <div class="home-imovel">
                        <img src="/img/venda-residencia.png" >
                        <div class="home-legenda-imovel">
                           <p class="class-titulo">Lorem Ipsum</p>
							             <p class="class-data">14 de outubro de 2014</p>
                        </div>
                      </div>
                   </a>
                </div>
            </div>

            
				<!--PAGINAÇÃO-->
	            	<div class="row">
	            		<div class="col-xs-12">
	            			<ul class="pagination" id="imovel-paginacao">
							  <li><a href="#">&laquo;</a></li>
							  <li class="active"><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">5</a></li>
							  <li><a href="#">&raquo;</a></li>
							</ul>
	            		</div>
	            	</div>
      </div><!--FIM CATEGORIA DE IMOVEL-->
<?php require $_SERVER["DOCUMENT_ROOT"]."/paginas/subpaginas/footer.php" ?>