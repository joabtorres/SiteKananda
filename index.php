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
    <?php
      $slide_objeto = new Objeto('slideshow');
      $slide_objeto->selecionarTudo();
      for ($i=0; $i < $slide_objeto->getLinhasAfetadas(); $i++) { 
        if($i == 0)
          echo "<li data-target='#carousel-example-generic' data-slide-to='".$i."' class='active'></li>";
        else
          echo "<li data-target='#carousel-example-generic' data-slide-to='".$i."'></li>";
      }
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" id="slideshow-home">

  <?php
    
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

      <?php
      $imovel = new Objeto('produto');
      $imovel->addConsulta('tipo_imovel', 'casa a venda');
      $imovel->addExtras('ORDER BY id DESC LIMIT 3');
      $imovel->selecionarTudo();

      $foto_imovel = new Objeto('foto_produto');

      if($imovel->getLinhasAfetadas()>0){
    ?>
      <div id="imovel-home">
          <h3 class="imovel-nome">A Venda</h3>
            <div class="row">
              <?php

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
                           <p><span class="icone-imovel">h</span> Quartos: <?=$value['quartos']?><br>
                             <span class="icone-imovel">x</span> Garagem: <?=$value['garagem']?><br>
                             <span class="icone-imovel">V</span> Área: <?=$value['area_ter']?></p>
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
      <?php } ?>
 

  <!--TERRENOS-->
  <?php
    $imovel->limparDados();
    $imovel->addConsulta('tipo_imovel', 'loteamento');
    $imovel->addExtras('ORDER BY id DESC LIMIT 3');
    $imovel->selecionarTudo();
    if($imovel->getLinhasAfetadas()>0){
  ?>
  <div id="imovel-home">
          <h3 class="imovel-nome">Loteamentos</h3>
            <div class="row">
              <?php

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
                           <p><span class="icone-imovel">h</span> Quartos: <?=$value['quartos']?><br>
                             <span class="icone-imovel">x</span> Garagem: <?=$value['garagem']?><br>
                             <span class="icone-imovel">V</span> Área: <?=$value['area_ter']?></p>
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
  <?php } ?>

  <!--CASA PARA ALUGAR-->
  <?php
    $imovel->limparDados();
    $imovel->addConsulta('tipo_imovel', 'casa para alugar');
    $imovel->addExtras('ORDER BY id DESC LIMIT 3');
    $imovel->selecionarTudo();
    if($imovel->getLinhasAfetadas()>0){
  ?>
  <div id="imovel-home">
          <h3 class="imovel-nome">Alugar</h3>
            <div class="row">
              <?php

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
                           <p><span class="icone-imovel">h</span> Quartos: <?=$value['quartos']?><br>
                             <span class="icone-imovel">x</span> Garagem: <?=$value['garagem']?><br>
                             <span class="icone-imovel">V</span> Área: <?=$value['area_ter']?></p>
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

  <?php } ?>

  <!--TERRENO URBANO-->
  <?php
    $imovel->limparDados();
    $imovel->addConsulta('tipo_imovel', 'terreno urbano');
    $imovel->addExtras('ORDER BY id DESC LIMIT 3');
    $imovel->selecionarTudo();
    if($imovel->getLinhasAfetadas()>0){
  ?>
  <div id="imovel-home">
          <h3 class="imovel-nome">Terreno Urbano</h3>
            <div class="row">
              <?php

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
                           <p><span class="icone-imovel">h</span> Quartos: <?=$value['quartos']?><br>
                             <span class="icone-imovel">x</span> Garagem: <?=$value['garagem']?><br>
                             <span class="icone-imovel">V</span> Área: <?=$value['area_ter']?></p>
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

  <?php } ?>


  <!--TERRENO RURAL-->
  <?php
    $imovel->limparDados();
    $imovel->addConsulta('tipo_imovel', 'terreno rural');
    $imovel->addExtras('ORDER BY id DESC LIMIT 3');
    $imovel->selecionarTudo();
    if($imovel->getLinhasAfetadas()>0){
  ?>
  <div id="imovel-home">
          <h3 class="imovel-nome">Terreno Rural</h3>
            <div class="row">
              <?php

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
                           <p><span class="icone-imovel">h</span> Quartos: <?=$value['quartos']?><br>
                             <span class="icone-imovel">x</span> Garagem: <?=$value['garagem']?><br>
                             <span class="icone-imovel">V</span> Área: <?=$value['area_ter']?></p>
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

  <?php } ?>

<!-- AREAS PORTUARIAS-->
  <?php
    $imovel->limparDados();
    $imovel->addConsulta('tipo_imovel', 'areas portuaria');
    $imovel->addExtras('ORDER BY id DESC LIMIT 3');
    $imovel->selecionarTudo();
    if($imovel->getLinhasAfetadas()>0){
  ?>
  <div id="imovel-home">
          <h3 class="imovel-nome">Áreas Portuária</h3>
            <div class="row">
              <?php

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
                           <p><span class="icone-imovel">h</span> Quartos: <?=$value['quartos']?><br>
                             <span class="icone-imovel">x</span> Garagem: <?=$value['garagem']?><br>
                             <span class="icone-imovel">V</span> Área: <?=$value['area_ter']?></p>
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

  <?php } ?>


<!-- MAPA-->
  <div class="row">
    <div class="col-md-12">
      
        <iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=itiatuba+shopping+itaituba&amp;aq=&amp;sll=-14.239424,-53.186502&amp;sspn=47.242641,86.572266&amp;ie=UTF8&amp;hq=itaituba+shopping&amp;hnear=Itaituba+-+Par%C3%A1&amp;ll=-4.273316,-55.981868&amp;spn=0.013741,0.024748&amp;t=m&amp;output=embed"></iframe>
      
    </div>
  </div>

<?php require RAIZ."paginas/subpaginas/footer.php" ?>