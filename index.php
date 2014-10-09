<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Kananda Négocios Imobiliários</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/templete.css">
</head>
<body>
  <div class="container" id="interface">
  <div class="row">
    <div class="col-md-12" id="cabecalho">
      <div class="logo-imagem">
        <img src="img/logo-home.png" alt="">
      </div>
      <img src="img/header.png">
      <ul class="nav nav-pills" id="menu-head">
        <li style="margin-left: 10px;"><a href="">Home</a></li>
        <li><a href="">Imóvel</a>
          <ul class="nav nav-pills">
            <li><a href="">A Venda</a></li>
            <li><a href="">Aluguel</a></li>
            <li><a href="">Terreno</a></li>
          </ul>
        </li>
        <li><a href="">Serviços</a></li>
        <li><a href="">Galeria</a></li>
        <li><a href="">Mapa</a></li>
        <li><a href="">Sobre</a></li>
      </ul>
    </div>
  </div>


<!-- FILTRO -->
 <div class="row">
    <div class="col-md-8 col-md-offset-2" style=" background: #ccc; margin-top:5px;">
      <form action="" class="form form-inline" id="filtro-home">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Local: </div>
            <select name="select" id="selecionaCidade" class="form-control">
            <optgroup label="Cidades">
              <option value="cidadeItaituba">Itaituba</option>
              <option value="cidadeSantarem">Santarém</option>
            </optgroup>
            <optgroup label="Municípios">
              <option value="municipioMiritituba">Miritituba</option>
              <option value="MunicipioTrairão">Trairão</option>
            </optgroup>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Imóvel:</div>
            <select name="select" id="selecionaImovel" class="form-control">
              <option value="imovelAvenda">A Venda</option>
              <option value="imovelTerrenos">Terrenos</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Quarto:</div>
            <select name="select" id="selecionaQntQuarto" class="form-control">
              <option value="qntQuarto-1">1</option>
              <option value="qntQuarto-2">2</option>
              <option value="qntQuarto-3">3</option>
              <option value="qntQuarto-4">4</option>
              <option value="qntQuarto-5">5</option>
            </select>
          </div>
        </div>



        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Garagem:</div>
            <select name="select" id="selecionaqntGaragem" class="form-control">
              <option value="qntGaragem-1">1</option>
              <option value="qntGaragem-2">2</option>
              <option value="qntGaragem-3">3</option>
              <option value="qntGaragem-4">4</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon"><label for="cOutros">Outros: </label></div>
            <input type="text" class="form-control" id="cOutros" name="tOutros">
          </div>
        </div>

       <button type="submit" class="btn btn-info">Buscar</button>
      </form>
    </div>
    <div class="col-md-offset-2" ></div>
  </div>


  <!-- SLIDE -->
  <div class="row">
    <div class="col-md-12" id>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" id="slideshow-home">
    <div class="item active">
      <img src="img/slide1.fw.png" alt="legenda">
      <div class="carousel-caption">
       <h3>Lorem ipsum</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis exercitationem, delectus nemo totam atque non magnam sapiente voluptatum, voluptas, sit amet deserunt aliquid quos optio molestias dolorum magni odio voluptates.</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slide1.fw.png" alt="legenda">
      <div class="carousel-caption">
       <h3>Lorem ipsum</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis exercitationem, delectus nemo totam atque non magnam sapiente voluptatum, voluptas, sit amet deserunt aliquid quos optio molestias dolorum magni odio voluptates.</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slide1.fw.png" alt="legenda">
      <div class="carousel-caption">
       <h3>Lorem ipsum</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis exercitationem, delectus nemo totam atque non magnam sapiente voluptatum, voluptas, sit amet deserunt aliquid quos optio molestias dolorum magni odio voluptates.</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slide1.fw.png" alt="legenda">
      <div class="carousel-caption">
       <h3>Lorem ipsum</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis exercitationem, delectus nemo totam atque non magnam sapiente voluptatum, voluptas, sit amet deserunt aliquid quos optio molestias dolorum magni odio voluptates.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

    </div>
  </div>

<!--A VENDA-->
  <div class="row">
    <div class="col-md-10 col-md-offset-1" style=" margin-top:5px;">
      <h3 class="titulo-imovel-home">A Venda</h3>
        <img src="/img/img-imovel-home.png">
      <div class="row" id="imovel-home">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img data-src="/js/holder.js/220x190" alt="...">
            <div class="caption">
              <p>h Quarto 2 <br>
                 x Garagem 1 <br>
                 V Área 90 m2</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img data-src="/js/holder.js/220x190" alt="...">
            <div class="caption">
              <p>h Quarto 2 <br>
                 x Garagem 1 <br>
                 V Área 90 m2</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img data-src="/js/holder.js/220x190" alt="...">
            <div class="caption">
              <p>h Quarto 2 <br>
                 x Garagem 1 <br>
                 V Área 90 m2</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-offset-1" ></div>
  </div>
  <!--TERRENOS-->
   <div class="row">
    <div class="col-md-10 col-md-offset-1" style=" margin-top:5px;">
      <h3 class="titulo-imovel-home">Terrenos</h3>
        <img src="/img/img-imovel-home.png">
      <div class="row" id="imovel-home">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img data-src="/js/holder.js/220x190" alt="...">
            <div class="caption">
              <p><span class="icone-imovel">h</span> Quarto 2 <br>
                 <span class="icone-imovel">x</span> Garagem 1 <br>
                 <span class="icone-imovel">V</span> Área 90 m2</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img data-src="/js/holder.js/220x190" alt="...">
            <div class="caption">
              <p><span class="icone-imovel">h</span> Quarto 2 <br>
                 <span class="icone-imovel">x</span> Garagem 1 <br>
                 <span class="icone-imovel">V</span> Área 90 m2</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img data-src="/js/holder.js/220x190" alt="...">
            <div class="caption">
              <p><span class="icone-imovel">h</span> Quarto 2 <br>
                 <span class="icone-imovel">x</span> Garagem 1 <br>
                 <span class="icone-imovel">V</span> Área 90 m2</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-offset-1" ></div>
  </div>
<!-- MAPA-->
  <div class="row">
    <div class="col-md-12" style=" margin: 5px 0;">
      <img src="img/mapa.jpg">
    </div>
  </div>

  <div class="row" id="rodape">
    <div class="col-md-12" style=" margin: 5px 0;" >
      <div class="row">
        <div class="col-md-4">
            <ul>
              <li><h3>IMÓVEIS</h3></li>
              <li><a href="">A Venda</a></li>
              <li><a href="">Terrenos</a></li>
            </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li><h3>SERVIÇOS</h3></li>
            <li><a href="">Conheça nossos serviços</a></li>
          </ul>
          <p><img src="/img/plug-facebook.jpg" ></p>
        </div>
        <div class="col-md-4">
          <h3>CONTATOS</h3>
          <form action="" class="form form-horizontal">
            <div class="form-group">
              <label for="cNome" class="col-md-3 control-label">Nome:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="cNome" name="tNome" placeholder="Nome Completo">
              </div>
            </div>
            <div class="form-group">
              <label for="cTelefone" class="col-md-3 control-label">Telefone:</label>
                <div class="col-md-9">
                  <input type="tel" class="form-control" id="cTelefone" name="tTelefone" placeholder="(99) 9999-9999">
                </div>
              </div>
            <div class="form-group">
              <label for="cEmail" class="col-md-3 control-label">E-mail:</label>
              <div class="col-md-9">
                 <input type="tel" class="form-control" id="cEmail" name="tEmail" placeholder="email@email.com">
              </div>
             </div>
            <div class="form-group">
              <label for="cMensagem" class="col-md-3 control-label">Mensagem:</label>
                <div class="col-md-9">
                  <textarea class="form-control" id="cMensagem" name="tMensagem" rows="3" placeholder="Informe sua mensagem"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-5 col-md-6 ">
                  <button type="submit" name="tEnviar" id="cEnviar" class="btn btn-info">Enviar</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>


  </div>
  </div><!--FIM DO CONTAINER -->
  <script type="text/javascript" src="/js/holder.js"></script>
  <script type="text/javascript" src="/js/jquery-1.11.0.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/docs.min.js"></script>
</body>
</html>