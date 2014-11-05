<?php 
  require("paginas/subpaginas/constantes.php");
  require('classes/Incluir.php');
  require(RAIZ."paginas/subpaginas/header.php");
?>
<link rel="stylesheet" href="<?= RAIZ ?>/css/home-index.css">
<!--FILTRO-->
<?php require RAIZ."paginas/subpaginas/buscar.php" ?>


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

  <?php
    $slide_objeto = new Objeto('slideshow');
    $slide_objeto->selecionarTudo();
    $i = 0;
    foreach ($slide_objeto->retornarDados() as $key => $value) {    
  ?>
      <div class="item <?= ($i==0)? 'active': ''?>">
        <img src="<?= RAIZ.$value['slide'] ?>" alt="legenda">
        <div class="carousel-caption">
         <h3><?= $value['titulo']?></h3>
         <p><?= $value['descricao']?></p>
        </div>
      </div>
    <?php
      $i++;
      }
    ?>

<!--     <div class="item">
      <img src="img/slide1.fw.png" alt="legenda">
      <div class="carousel-caption">
       <h3>Lorem ipsum</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis exercitationem, delectus nemo totam atque non magnam sapiente voluptatum, voluptas, sit amet deserunt aliquid quos optio molestias dolorum magni odio voluptates.</p>
      </div>
    </div>-->
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

    
      <div id="imovel-home">
          <h3 class="imovel-nome">A Venda</h3>
            <div class="row">
              <?php
                $imovel = new Objeto('produto');
                $imovel->addConsulta('tipo_imovel', 'casa a venda');
                $imovel->addExtras('LIMIT 3');
                $imovel->selecionarTudo();

                $foto_imovel = new Objeto('foto_produto');

                foreach ($imovel->retornarDados() as $key => $value) {
                  $foto_imovel->limparDados();
                  $foto_imovel->addConsulta('id_produto', $value['id'] );
                  $foto_imovel->addExtras('LIMIT 1');
                  $foto_imovel->selecionarTudo();
                  $foto = $foto_imovel->retornar();
              ?>
                <div class="col-xs-4" >
                  <a href="<?= RAIZ ?>paginas/imovel/imovel-especifico/">
                      <div class="home-imovel">
                        <img src="<?= RAIZ.$foto['arquivo'] ?>" alt="...">
                        <div class="home-legenda-imovel">
                           <p><span class="icone-imovel">Quartos</span> <?=$value['quartos']?><br>
                             <span class="icone-imovel">Garagem</span> <?=$value['garagem']?><br>
                             <span class="icone-imovel">Área</span> <?=$value['area_ter']?></p>
                        </div>
                      </div>
                   </a>
                </div>
                <?php
                  }
                ?>

                <a href=""><h3 class="imovel-ver-mais btn-info">Ver Mais</h3></a>
            </div>
      </div>
  
 

  <!--TERRENOS-->
  <div id="imovel-home">
          <h3 class="imovel-nome">Loteamentos</h3>
            <div class="row">
              <?php

                $imovel->limparDados();
                $imovel->addConsulta('tipo_imovel', 'loteamento');
                $imovel->addExtras('LIMIT 3');
                $imovel->selecionarTudo();

                foreach ($imovel->retornarDados() as $key => $value) {
                  $foto_imovel->limparDados();
                  $foto_imovel->addConsulta('id_produto', $value['id'] );
                  $foto_imovel->addExtras('LIMIT 1');
                  $foto_imovel->selecionarTudo();
                  $foto = $foto_imovel->retornar();
              ?>
                <div class="col-xs-4" >
                  <a href="<?= RAIZ ?>paginas/imovel/imovel-especifico/">
                      <div class="home-imovel">
                        <img src="<?= RAIZ.$foto['arquivo'] ?>" alt="...">
                        <div class="home-legenda-imovel">
                           <p><span class="icone-imovel">Quartos</span> <?=$value['quartos']?><br>
                             <span class="icone-imovel">Garagem</span> <?=$value['garagem']?><br>
                             <span class="icone-imovel">Área</span> <?=$value['area_ter']?></p>
                        </div>
                      </div>
                   </a>
                </div>
                <?php
                  }
                ?>

                <a href=""><h3 class="imovel-ver-mais btn-info">Ver Mais</h3></a>
            </div>
      </div>


<!-- MAPA-->
  <div class="row">
    <div class="col-md-12">
      <p class="text-center"><img src="<?= RAIZ ?>img/mapa.jpg"></p>
    </div>
  </div>

<?php require RAIZ."paginas/subpaginas/footer.php" ?>